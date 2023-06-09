<?php
    
    
    class UserController
    {
        private $userModel;
        private $renderer;
        
        public function __construct($userModel, $renderer)
        {
            $this->userModel = $userModel;
            $this->renderer = $renderer;
        }
        
        public function getUsers()
        {
            $data['users'] = $this->userModel->getUsers();
            $this->renderer->render("user", $data);
        }
        
        public function login()
        {
            list($user, $password) = $this->getDatos();
            $mail = $_POST["user"];
            $passsss = $_POST["password"];
            $data['user'] = $this->userModel->login($mail, $passsss);
            if(empty($data['user'])){
                $this->renderer->render("home", $data);
                exit();
            }
            $this->renderer->render("user", $data);
          
        }
        
        public function logOut()
        {
            
            $this->renderer->render("user");
            exit();
        }
        
        private function getDatos()
        {
            if (isset($_POST['user']) && !empty($_POST['user'] &&
                    isset($_POST['password']) && !empty($_POST['password']))) {
                $user = $_POST['user'];
                $password= $_POST['password'];
                return array( $user , $password);
            }else{
                $this->renderer->render("user");
                exit();
            }
            
        }
        
    }