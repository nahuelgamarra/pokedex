<?php
    
    class HomeModel
    {
        private $database;
        public function __construct($database)
        {
            $this->database= $database;
        }
        public function getPokemons(){
            $sql= "SELECT * FROM pokemon p";
            return $this->database->query($sql);
        }
        
    }