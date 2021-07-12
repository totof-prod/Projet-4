<?php


namespace Blog\Controller;

use App;

class UsersController extends AppController {

    public function login(){
        $error = false;
        if(!empty($_POST )){

            $auth = new \core\auth\DbAuth(App::getInstance()->getDb());
            if($auth->login($_POST["username"], $_POST["password"])){
                header('Location: index.php?p=admin.posts.index');
            }else{
                $error = true;
            }
        }
        $form = new \core\html\BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'error'));

    }
}