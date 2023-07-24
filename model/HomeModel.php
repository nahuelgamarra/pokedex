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
        
        public function listByName($namePokemon){
           
            $sql= "SELECT * FROM pokemon p
            where p.nombre= '$namePokemon'";
//            var_dump($this->database->query_row($sql));
//            exit();
            return $this->database->query_row($sql);
        }
        
    }