<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'],$_POST['nombre']
   ,$_POST['apellido']
    ,$_POST['contacto']
    ,$_POST['edad']
    ,$_POST['genero']
    ,$_POST['domicilio']
    ,$_POST['estado']
    ,$_POST['email']);
    

?>