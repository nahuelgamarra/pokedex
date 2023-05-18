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
            $data['users']=$this->userModel->getUsers();
            $this->renderer->render("users", $data);
        }
        public function login(){
            $mail= $_POST["user"];
            $passsss= $_POST["password"];
          //  var_dump($email);
            $data['user']=$this->userModel->login($mail,$passsss);
            $this->renderer->render("user", $data);
         // return  $this->userModel->login($email, $password);
        }
    
    }