<?php
    
    class AdminModel
    {
        private $database;
        public function __construct($database)
        {
            $this->database=$database;
        }
        public function getPokemon($id){
            $sql= "SELECT * FROM pokemon where id= '$id'";
    
            return $this->database->query($sql);
        }
        public function getTipo(){
            $sql= "SELECT distinct p.tipo as pasa FROM pokemon p ";
    
            return $this->database->query($sql);
        }
    
    }