<?php

namespace Blog;

class App{

    private static $_instance;
    public $title = 'Mon super Blog';
    private $db_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getTable($name){

        $class_name = "\\Blog\\table\\".ucfirst($name)."Table";

        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config =  config::getInstance();
        if(is_null($this->db_instance)){
            $this->db_instance = new Database($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

}