<?php
    if(empty($_POST['password']) || empty($_POST['user'])){
        header("Location: ./index.php?sinIngreso");
        exit();
    }
    $user= $_POST['user'];
    $password= $_POST['password'];
    
    
