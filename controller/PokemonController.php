<?php
    
    class PokemonController
    {
        private $renderer;
        private $pokemonModel;
    
        public function __construct($renderer, $pokemonModel)
        {
        $this->pokemonModel= $pokemonModel;
        $this->renderer=$renderer;
        }
        public function list(){
//         $data['pokemones'] =  $this->pokemonModel->getPokemons();
//         Session::set('pokemones', $data['pokemones']);
////         var_dump(Session::get('pokemones')[0]['imagenLink']);
////         exit();
        $this->renderer->render('home', $data);
        }
        
        
        
    }