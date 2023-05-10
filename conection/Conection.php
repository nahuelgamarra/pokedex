<?php
    
    namespace conection;
    
    use mysqli;

    class Conection
    {
        private $server;
        private $username;
        private $password;
        private $database;
        private $port;
        private $conection;
    
        public function __construct()
        {
            $config = parse_ini_file('config.ini');
    
            $this->server = $config['SERVER'];
            $this->username = $config['USERNAME'];
            $this->password = $config['PASSWORD'];
            $this->database = $config['DATABASE'];
            $this->port= $config['PORT'];
            $this->conection = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
        }
        public function getConection(){
            return $this->conection;
        }
        
    
    }
 