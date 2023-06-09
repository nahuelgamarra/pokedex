<?php
    
    
   

    class Conection
    {
        private $server;
        private $username;
        private $password;
        private $database;
        private $port;
        private $connection;
    
        public function __construct($server,$username,$password,$database,$port)
        {
            $config = parse_ini_file('config/config.ini');
    
            $this->server = $config['SERVER'];
            $this->username = $config['USERNAME'];
            $this->password = $config['PASSWORD'];
            $this->database = $config['DATABASE'];
            $this->port= $config['PORT'];
            $this->connection = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
        }
        public function getConnection()
        {
            return $this->connection;
        }
        public function query($sql) {
            $result = mysqli_query($this->connection, $sql);
            return mysqli_fetch_all($result, MYSQLI_BOTH);
        }
        public function login($email, $password){
            $query = 'SELECT * FROM user WHERE email = ? AND password = ?';
            $stmt =   $this->getConnection()->prepare($query);
            $stmt->bind_param('ss', $email, $password);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado;
        }
    
    }
 