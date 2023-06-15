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
            $data= "Estas en el modelo";
            $this->renderer->render('home');
        }
        
    }