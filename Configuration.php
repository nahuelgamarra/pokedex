<?php
    include_once ("model/UserModel.php");
    
    include_once ("helpers/Router.php");
    include_once("helpers/MustacheRender.php");
    
    include_once ("conection/Conection.php");
    include_once ("controller/UserController.php");
    include_once('third-party/mustache/src/Mustache/Autoloader.php');
    class Configuration
    {
        private $configFile = 'config/config.ini';
        public function __construct() {
        }
        private function getArrayConfig() {
            return parse_ini_file($this->configFile);
        }
        public function getDatabase() {
            $config = $this->getArrayConfig();
           return new Conection(
                $config['SERVER'],
                $config['USERNAME'],
                $config['PASSWORD'],
                $config['DATABASE'],
                $config['PORT']);
               
        }
        public function getUserController(){
            return new UserController(new UserModel($this->getDatabase()),$this->getRenderer());
        }
    
        private function getRenderer()
        {
            return new MustacheRender('view/partial');
        }
        public function getRouter() {
            return new Router(
                $this,
                "getUserController",
                "getUsers");
        }
    
    }