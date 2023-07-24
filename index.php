<?php
    
    include_once('Configuration.php');
    include_once('helpers/Session.php');
    
    Session::initializeSession();
    $config = new Configuration();
    $router = $config->getRouter();
    
    $module = $_GET['module'] ?? 'home';
    $method = $_GET['action'] ?? 'list';
    $controladoresValios = [
        'home',
        'user'
        
    ];
    
    if(empty(Session::get('logged'))&& !in_array($module, $controladoresValios)){
        Header::redirect("/");
        exit();
    }
    
    
    
    
    $router->route($module, $method);
 