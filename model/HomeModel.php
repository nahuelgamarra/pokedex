<?php
    
    class HomeModel
    {
        private $database;
        public function __construct($database)
        {
            $this->database= $database;
        }
        public function getPokemons(){
            $sql= "SELECT p.id, p.imagenLink, p.numero ,p.nombre, p.tipo FROM pokemon p";
            return $this->database->query($sql);
        }
        
    }