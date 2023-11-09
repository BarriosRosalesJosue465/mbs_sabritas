<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$apellido,$contacto,$edad,$genero,$domicilio,$estado,$email){
            $stament = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre,:apellido,:contacto,:edad,:genero,:domicilio,:estado,:email)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":contacto",$contacto);
            $stament->bindParam(":edad",$edad);
            $stament->bindParam(":genero",$genero);
            $stament->bindParam(":domicilio",$domicilio);
            $stament->bindParam(":estado",$estado);
            $stament->bindParam(":email",$email);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre,$apellido,$contacto,$edad,$genero,$domicilio,$estado,$email){
            $stament = $this->PDO->prepare("UPDATE username SET nombre = :nombre , apellido = :apellido , contacto = :contacto , edad = :edad , genero = :genero , domicilio = :domicilio , estado = :estado , email = :email WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":contacto",$contacto);
            $stament->bindParam(":edad",$edad);
            $stament->bindParam(":genero",$genero);
            $stament->bindParam(":domicilio",$domicilio);
            $stament->bindParam(":estado",$estado);
            $stament->bindParam(":email",$email);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>