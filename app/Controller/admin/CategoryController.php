<?php

namespace Blog\Controller\admin;
use \App;
use core\html\BootstrapForm;
use core\tools;

class CategoryController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('post');
        $this->loadModel('category');
        $this->loadModel('comments');
    }
    public function index(){
        $posts = $this->post->all();
        $categories = $this->category->all();
        $comments = $this->comments->count();
        $visitor = new tools\visitorCounter();
        $this->render('admin.index', compact('posts', 'categories', 'visitor', 'comments'));
    }
    public function add(){

        if (!empty($_POST)) {

            $result = $this->category->create([
                    'name' => $_POST['name']
                ]
            );
            if ($result) {
                $this->setFlash('Le livre à bien été ajoutée', 'success');
                return $this->list();
            }
        }
        $categories = $this->category->extract('id', 'name');
        $form = new BootstrapForm($_POST);
        $this->render('admin.category.edit', compact('form', 'categories'));

    }
    public function edit(){

if (!empty($_POST)) {

    $result = $this->category->update($_GET['id'], [
            'name' => $_POST['name']
        ]
    );
    if ($result) {
        $this->setFlash('Le livre à bien été Modifiée', 'success');
        return $this->list();
    }
}
    $category = $this->category->find($_GET['id']);
    $form = new BootstrapForm($category);
    $this->render('admin.category.edit', compact('form'));


    }
    public function  delete(){

        if (!empty($_POST)){

            $result = $this->category->delete($_POST['id']);
            $this->setFlash('Le livre à bien été supprimée', 'success');
            return $this->list();

        }
    }
    public function list(){

        $categories= $this->category->all();
        $this->render('admin.category.list', compact('categories'));
    }


}