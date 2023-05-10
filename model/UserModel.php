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
    }