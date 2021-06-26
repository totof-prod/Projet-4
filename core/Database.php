<?php
namespace core;
    use \PDO;

    class Database
    {

        private $db_name;
        private $db_user;
        private $db_pass;
        private $db_host;
        protected $pdo;

        public function __construct($db_name, $db_user = 'Totof', $db_pass = 'JagLand10', $db_host = '127.0.0.1:3306')
        {
            $this->db_host = $db_host;
            $this->db_name = $db_name;
            $this->db_pass = $db_pass;
            $this->db_user = $db_user;
        }

        private function getPDO()
        {
                $pdo = new PDO('mysql:dbname=blog_auteur;host=127.0.0.1:3306', 'Totof', 'JagLand10');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
                return $pdo;
        }

        public function query($statement, $class_name = null, $one = false)
        {
            $req = $this->getPDO()->query($statement);
            if(
                strpos($statement, 'UPDATE') === 0 ||
                strpos($statement, 'INSERT') === 0 ||
                strpos($statement, 'DELETE') === 0
            ){
                return $req;
            }

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

        public function prepare($statement, $values, $class_name = null, $one = false){
            $req = $this->getPDO()->prepare($statement );
            $res = $req->execute($values);

            if(
                strpos($statement, 'UPDATE') === 0 ||
                strpos($statement, 'INSERT') === 0 ||
                strpos($statement, 'DElETE') === 0
            ){
                return $res;
            }
            
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
    }