<?php
    /*Controlladores*/
    include_once('controller/HomeController.php');
    include_once ("controller/UserController.php");
    
    /*Modelos*/
    include_once ("model/UserModel.php");
    include_once ("model/HomeModel.php");
    
    /*Helpers*/
    include_once ("helpers/Router.php");
    include_once("helpers/MustacheRender.php");
    include_once ("conection/Conection.php");
    include_once('third-party/mustache/src/Mustache/Autoloader.php');
    class Configuration
    {
        private $configFile = 'config/config.ini';
        private static $instance;
        public function __construct() {
        }
        public function getHomeController()
        {
            return new HomeController($this->getRenderer(), new HomeModel($this->getDatabase()));
        }
    
        public static function getInstance()
        {
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
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