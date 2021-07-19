<?php


namespace Blog\Controller;

use App;
use core\auth\DbAuth;

class UsersController extends AppController {
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('post');
        $this->loadModel('category');
        $this->loadModel('comments');
    }

    public function login(){
        $error = false;
        if(!empty($_POST )){

            $auth = new DbAuth(App::getInstance()->getDb());
            if($auth->login($_POST["username"], $_POST["password"])){
                header('Location: index.php?p=admin.posts.index');
            }else{
                $error = true;
            }
        }
        $posts = $this->post->all();
        $categories = $this->category->all();
        $form = new \core\html\BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'error', 'posts', 'categories'));

    }
    public function disconnect(){
        unset($_SESSION['auth']);
        header('location: index.php');
    }

}