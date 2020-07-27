<?php
namespace Blog;
    use \PDO;

    class Database
    {

        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;
        protected $pdo;

        public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost:8889')
        {
            $this->db_host = $db_host;
            $this->db_name = $db_name;
            $this->db_pass = $db_pass;
            $this->db_user = $db_user;
        }

        private function getPDO()
        {
                $pdo = new PDO('mysql:dbname=blog;host=localhost:8889', 'root', 'root');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
                return $pdo;
        }

        public function query($statement, $class_name = null, $one = false)
        {
            $req = $this->getPDO()->query($statement);
            if($class_name === null){
                $req->setFetchMode(PDO::FETCH_OBJ);
            }else{
                $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
            }
            if($one){
                $data = $req->fetch();
            }else{
                $data = $req->fetchAll();
            }
            return $data;
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