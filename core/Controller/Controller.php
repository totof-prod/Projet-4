<?php

namespace core\Controller;

class Controller{


    protected $viewPath;
    protected $template;

    protected function render($view, $data = []){
        ob_start();
        extract($data);
        require($this->viewPath . str_replace('.', '/', $view) . ".php");
        $content = ob_get_clean();
        if(strpos($view, 'admin') !== false){
            require($this->viewPath . 'templates/' .'admin' . ucfirst($this->template) . '.php');
        }else{
            require($this->viewPath . 'templates/' . $this->template . '.php');
        }
    }
    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Accès interdit');
    }
    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die("Oupps je ne trouve pas ='(" );
    }
    protected function setFlash($message, $type= 'error'){
        $_SESSION['flash'] = array(
            'message'=> $message,
            'type'=>$type
        );
    }

}
