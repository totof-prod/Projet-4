<?php
namespace Blog {
    use \PDO;

    class Database{

        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;
        private $pdo;

        public  function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost:8889'){
            $this->db_host = $db_host;
            $this->db_name = $db_name;
            $this->db_pass = $db_pass;
            $this->db_user = $db_user;
        }
        private function getPDO(){

            if ($this->pdo === NULL){
                $pdo = new PDO('mysql:dbname=blog;host=localhost:8889','root', 'root' );
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
                return $pdo;
            }
            return $pdo;
        }
        public function query($statement, $class_name){
            $req = $this->getPDO()->query($statement);
            return $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        }

        public function prepare($statement, $values, $class_name, $one = false){
            $req = $this->getPDO()->prepare($statement );
            $req->execute($values);
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);


            if($one){
                $data = $req->fetch();
            }else{
                $data = $req->fetchAll();
            }

            return $data;


        }
    }
}