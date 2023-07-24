<?php
    
    class AdminController
    {
        private $renderer;
        private $adminModel;
        
        public function __construct($renderer, $adminModel)
        {
            $this->renderer = $renderer;
            $this->adminModel = $adminModel;
        }
        
  
        
        public function updatePokemon($msj =null )
        {
            $data['msj']= $msj;
            $data['pokemon'] = $this->adminModel->getPokemon($_GET['pokemon']);
            $data['tipos'] = $this->adminModel->getTipo();
            $this->renderer->render('updatePokemon', $data);
        }
        public function saveChanges(){
        $datosPokemon=$this->getData();
        $this->adminModel->updatePokemon($datosPokemon);
        
            Header::redirect('updatePokemon?pokemon='.$datosPokemon['id']);
        }
    
        private function getData()
        {
            $data['id']= $_POST['id'];
            $data['nombre']= $_POST['nombre'];
            $data['tipo']= $_POST['tipo'];
            $data['descripcion']= $_POST['descripcion'];
            $data['habilidad']= $_POST['habilidad'];
          //  $data['nuevaImg']= $_POST['nuevaImg'];
           
            return $data;
        }
    }