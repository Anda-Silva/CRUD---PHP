<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>CLASE COORDINADOR</title>
</head>
<body>
    
</body>
</html>

<?php

class Coordinador {
    public $nombre;
    public $apellido;
    public $correo;
    public $programa;


    public function borrarCoordinador($idCoordinador) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from coordinador where ID= ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($idCoordinador));
        $conn = null;
        header('location:../views/coordinador.php');
    }
    
    public function addCoordinador($nombre, $apellido, $correo, $programa) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into coordinador (nombre, apellido, correo, programa) values(?, ?, ?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($nombre, $apellido, $correo, $programa));
        $conn = null;
        print"El coordinador $nombre, $apellido, $correo, $programa sido agregado";
        header("location: ../views/coordinador.php");
    }
    public function actualizarCoordinador($nombre, $apellido, $correo, $programa, $id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE coordinador SET NOMBRE =?, APELLIDO= ?, CORREO= ?, PROGRAMA= ? WHERE ID = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($nombre, $apellido, $correo, $programa, $id));
        $conn = null;
        print"El Coordinador $nombre, $apellido, $correo, $programa ha sido Actualizado";
        header("location: ../views/coordinador.php");
    }

    public function consultarCoordinador(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }

    public function consultarCoordinadorXId($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
};

?>