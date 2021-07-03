<?php


namespace Blog\Controller\admin;
use \App;
use core\html\BootstrapForm;


class CommentController extends AppController
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
        $categories= $this->category->all();

        $this->render('admin.index', compact('posts', 'categories'));
    }
    public function edit(){


        $comments = $this->comments->findSignal($_GET['id']);
        $this->render('admin.comment.edit', compact('comments'));


    }
    public function  delete(){
        if (!empty($_POST)){
            $result = $this->comments->delete($_POST['id']);
            if ($result){
                    return $this->index();
                }
        }

    }
    public function update(){

        if (!empty($_POST)) {
            $result = $this->comments->update($_POST['id'], ['Signalement' => $_POST['Signalement']]);

            if ($result) {
                return $this->index();
            }
        }
    }


}