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

    public function getUserId(){
        if ($this->logged())
        {
            return $_SESSION['auth'];
        }
        return  false;
    }

   function login($username, $password){

      $user =  $this->db->prepare(' SELECT * FROM users WHERE username = ?',
           [$username] , null,
           true);
      if ($user){
          if ($user->password === sha1($password)){
               $_SESSION['auth'] = $user->id;
               return true ;
          }

      }
          return false;

    }

    public function  logged(){
      return isset($_SESSION['auth']);
    }

}
