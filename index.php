<?php
    
    include_once('Configuration.php');
    include_once('helpers/Session.php');
    
    Session::initializeSession();
    $config = new Configuration();
    $router = $config->getRouter();
    
    $module = $_GET['module'] ?? 'home';
    $method = $_GET['action'] ?? 'list';
    
    $router->route($module, $method);
 