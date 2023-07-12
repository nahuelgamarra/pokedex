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
            $data['user'] = $this->userModel->login($user, $password);
            if (empty($data['user'])) {
                $data['msj'] = "Usuario y/o password incorrectos";
                Header::redirect('/home');
                exit();
            }
            Session::set('logged', true);
            Session::set('user',$data['user'] );
            Header::redirect('/home');
            exit();
        }
        
        public function logOut()
        {
            Session::finalizarSesion();
            Header::redirect('/');
        }
        
        private function getDatos()
        {
            if (isset($_POST['user']) && !empty($_POST['user'] &&
                    isset($_POST['password']) && !empty($_POST['password']))) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                return array($user, $password);
            } else {
                Header::redirect('/home');
                exit();
            }
            
        }
        
    }