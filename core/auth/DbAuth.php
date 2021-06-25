<?php


namespace core\auth;


use core\Database;

class DbAuth
{

    private $db;


    /**
     * DbAuth constructor
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * @param $username
     * @param $password
     */
    public function login($username){

        $user = $this->db->prepare(' SELECT * FROM users WHERE username = ?',
            [$username] , null,
            true);
        return $user;
    }


    public function  logged(){
      return isset($_SESSION['auth']);
    }

}