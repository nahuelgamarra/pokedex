<?php
    
    use conection\Conection;
    use controller\UserController;
    use model\UserModel;
    
    include_once("./conection/Conection.php");
    include_once("./view/header.html");
    include_once ("./controller/UserController.php");
    include_once ("./model/UserModel.php");
   

    $mio= new Conection();
    $conection=  $mio->getConection();
    $sql= "select user.usuario ,user.email from user where idUser=2 ";

    $model= new UserModel($conection);
    $control=new UserController($model);
    $resultado= $control->getUsers();
    foreach ($resultado as $res){
        foreach ($res as $us){
            echo "$us" . "<br>";
        }
    }
  
    

    ?>
