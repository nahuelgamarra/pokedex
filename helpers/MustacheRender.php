<?php
   // include_once ("view/user_view.mustache")
    class MustacheRender
    {
        private $mustache;
        
        public function __construct($partialsPathLoader)
        {
            Mustache_Autoloader::register();
            $this->mustache = new Mustache_Engine(
                array(
                    'partials_loader' => new Mustache_Loader_FilesystemLoader($partialsPathLoader)
                ));
        }
    
        public function render($contentFile , $data = array() ){
            /*$contentAsString =  file_get_contents("view/". $contentFile . "_view.mustache");
            echo  $this->mustache->render($contentAsString, $data);*/
            if(!empty(Session::get('logged')))
                $data['logged'] = Session::get('logged');
            if(!empty(Session::get('rol')))
                $data['rol'] = Session::get('rol');
            if(!empty(Session::get('username')))
                $data['username'] = Session::get('username');
            echo  $this->generateHtml($contentFile, $data);
        }
        public function generateHtml($contentFile, $data = array()) {
            $contentAsString = file_get_contents('view/partial/header.mustache');
            $contentAsString .= file_get_contents('view/' . $contentFile . '_view.mustache');
            $contentAsString .= file_get_contents('view/partial/footer.mustache');
        
            return $this->mustache->render($contentAsString, $data);
        }
    
    }