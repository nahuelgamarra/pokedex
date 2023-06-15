<?php
    include_once('helpers/Session.php');
    include_once('Configuration.php');
    
    Session::initializeSession();
    
    $router = Configuration::getInstance()->getRouter();
    
  //  $configuration = new Configuration();
   
  //  $router = $configuration->getRouter();
   
    $module = $_GET['module'] ?? 'Home';
  
    $method = $_GET['action'] ?? 'list';
 
    $router->route($module, $method);
 