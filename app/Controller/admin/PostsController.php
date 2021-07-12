<?php

namespace Blog\Controller\admin;
use core\html\BootstrapForm;

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('post');
        $this->loadModel('category');
    }
    public function index(){
        $posts = $this->post->all();
        $categories= $this->category->all();

        $this->render('admin.index', compact('posts', 'categories'));
    }
    public function add(){

        if (!empty($_POST)) {

            $result = $this->post->create([
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id' => $_POST['category_id']
                ]
            );
            if ($result) {
                $this->setFlash('La page à bien été ajoutée', 'success');
                return $this->index();
            }
        }
        $categories = $this->category->extract('id', 'name');
        $form = new BootstrapForm($_POST);
        $this->render('admin.posts.edit', compact('form', 'categories'));

    }
    public function edit(){

        if (!empty($_POST)){

            $result = $this->post->update($_GET['id'],[
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id'=> $_POST['category_id']
                ]
            );
            if($result){
                $this->setFlash('La page à bien été modifiée', 'success');
                return $this->index();
            }
        }
        $post= $this->post->find($_GET['id']);
        $categories= $this->category->extract('id', 'name');
        $form = new BootstrapForm($post);
        $this->render('admin.posts.edit', compact('form', 'categories', 'post'));
    }
    public function  delete(){

        if (!empty($_POST)){
            $result = $this->post->delete($_POST['id']);
            $this->setFlash('La page à bien été supprimée', 'success');
            return $this->index();
        }
    }


}