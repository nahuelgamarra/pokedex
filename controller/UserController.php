<?php
    
   
    
    class UserController
    {
        private $userModel;
        private $renderer;
    
        public function __construct($userModel,$renderer)
        {
            $this->userModel= $userModel;
            $this->renderer = $renderer;
        }
        public function getUsers(){
            $data['user']=$this->userModel->getUsers();
            $this->renderer->render("user", $data);
        }
        public function login($email, $password){
          return  $this->userModel->login($email, $password);
        }
    
    }