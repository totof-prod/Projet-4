<?php

namespace Blog;
class App{

    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost:8889';


    private static $database;

    public static function getDatabase(){
        if (self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }

      return self::$database;
    }

}