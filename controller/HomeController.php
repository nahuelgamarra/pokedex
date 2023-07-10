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
    
            $data['pokemones']= Session::get('pokemones');
            var_dump($data);
            $this->renderer->render('home',$data);
        }
        
    }