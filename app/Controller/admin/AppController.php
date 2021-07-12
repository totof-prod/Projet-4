<?php
namespace Blog\Controller\Admin;

use \App;
use \core\auth\DbAuth;

class AppController extends \Blog\Controller\AppController {

    public function __construct()
    {
        parent::__construct();
        $app = App::getInstance();
        $auth = new DbAuth($app->getDb());

        if (!$auth->logged()){
            $this->forbidden();
        }
    }
}