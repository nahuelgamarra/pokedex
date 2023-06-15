<?php
  //  session_start();
    
    class UserModel
    {
        private $database;
        public function __construct($database,)
        {
            $this->database= $database;
        }
        public function getUsers(){
            return $this->database->query('select *from user ');
        }
        public function login1($user, $password){
            $query = 'SELECT * FROM user WHERE nick = ? AND password = ?';
            $stmt =   $this->database->getConnection()->prepare($query);
            $stmt->bind_param('ss', $user, $password);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado;
        }
        public function login($email, $password){
            if($this->database->login($email,$password)->num_rows==0){
                return null;
            }
            $result=  $this->database->login($email,$password);
         return   mysqli_fetch_assoc( $result);
           
        }
    }