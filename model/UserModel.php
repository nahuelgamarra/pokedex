<?php
    
    
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
        public function login1($email, $password){
            $query = 'SELECT * FROM user WHERE email = ? AND password = ?';
            $stmt =   $this->database->getConnection()->prepare($query);
            $stmt->bind_param('ss', $email, $password);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado;
        }
        public function login($email, $password){
        return   $this->database->login($email,$password);
        }
    }