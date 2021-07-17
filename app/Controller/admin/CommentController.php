<?php


namespace Blog\Controller\admin;
use \App;
use core\html\BootstrapForm;
use core\tools;


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
        $categories = $this->category->all();
        $comments = $this->comments->count();
        $visitor = new tools\visitorCounter();
        $this->render('admin.index', compact('posts', 'categories', 'visitor', 'comments'));
    }
    public function  delete(){
        if (!empty($_POST)){
            $result = $this->comments->delete($_POST['id']);
            if ($result){
                $this->setFlash('Le commentaire à bien été supprimé', 'success');
                $this->list();
            }
        }

    }
    public function update(){

        if (!empty($_POST)) {
            $result = $this->comments->update($_POST['id'], ['Signalement' => $_POST['Signalement']]);

            if ($result) {
                $this->setFlash('Le commentaire à bien été conservé', 'success');
                return $this->list();
            }
        }
    }
    public function list(){
        $comments= $this->comments->all();
        $this->render('admin.comment.list', compact('comments'));
    }


}