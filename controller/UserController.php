<?php
    
    namespace controller;
    
    class UserController
    {
        private $userModel;
        public function __construct($userModel)
        {
            $this->userModel= $userModel;
        }
        public function getUsers(){
            
            return $this->userModel->getUsers();
        }
    
    }