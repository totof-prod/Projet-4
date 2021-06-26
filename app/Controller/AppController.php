<?php
namespace Blog\Controller;

use core\Controller\Controller;
use \App;

class AppController extends Controller {

    protected $template = 'template';

    public function __construct()
    {
        $this->viewPath = ROOT . '/app/view/';
    }

   protected function loadModel($model_name){
       $this->$model_name = App::getInstance()->getTable($model_name);
    }
}