<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre'],
     $_POST['apellido'],
     $_POST['contacto'],
     $_POST['edad'],
     $_POST['genero'],
     $_POST['domicilio'],
     $_POST['estado'],
     $_POST['email']);
?>