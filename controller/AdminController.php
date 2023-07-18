<?php
    
    class AdminController
    {
        private $renderer;
        private $adminModel;
        public function __construct($renderer,$adminModel)
        {
            $this->renderer=$renderer;
            $this->adminModel= $adminModel;
        }
    public function list(){
            var_dump('listar de admin');
            exit();
    }
    public function updatePokemon(){
          $data['pokemon']= $this->adminModel->getPokemon($_GET['pokemon']);
            $data['tipos']=  $this->adminModel->getTipo();
//            var_dump( $data['tipos']);
//            exit();
          $this->renderer->render('updatePokemon',$data);
    }
    }