<?php
    
    class HomeController
    {
        private $renderer;
        private $homeModel;
    
        public function __construct($renderer, $homeModel)
        {
            $this->homeModel = $homeModel;
            $this->renderer = $renderer;
        }
        public function list(){
           $usuario= Session::get('user');
            if( $usuario){
                if($usuario['nick']== 'admin'){
                    $data['esAmin']= $usuario;
                }
            }
            $data['pokemones']= $this->homeModel->getPokemons();
            $this->renderer->render('home',$data);
        }
        public function listByName(){
            $name= $_GET['buscado'];
           $data['pokemon'] = $this->homeModel->listByName(ucfirst($name));
        
           $this->renderer->render('pokemon', $data);
           
    }
        
    }