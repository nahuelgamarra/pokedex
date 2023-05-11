<?php
    
    namespace model;
    
    class UserModel
    {
        private $database;
        public function __construct($database)
        {
            $this->database= $database;
        }
        public function getUsers(){
            return $this->database->query('select *from user ');
        }
        public function login($email, $password){
            $query = 'SELECT * FROM user WHERE email = ? AND password = ?';
    
            $stmt = $this->database->prepare($query);
            $stmt->bind_param('ss', $email, $password);
            $stmt->execute();
    
            $resultado = $stmt->get_result();
    
            return $resultado;
       
        }
    }