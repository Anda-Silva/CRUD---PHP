<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>CLASE NOVEDAD</title>
</head>
<body>
    
</body>
</html>

<?php

class Novedad {
    public $tipo;
    public $descripcion;

    public function borrarNovedad($idNovedad) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from novedad where ID= ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($idNovedad));
        $conn = null;
        header('location:../views/novedad.php');
    }

    public function añadirNovedad($idNovedad, $tipo) {
        print("<br/><br/>  La novedad #1 $idNovedad $tipo ha sido añadida");
        print("<br/><br/><br/><a class='boton' href='../views/novedad.php'>Regresar</a>");
    }

    public function addNovedad($tipo, $descripcion) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into novedad (tipo, descripcion) values(?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($tipo, $descripcion));
        $conn = null;
        print"La novedad $tipo, $descripcion ha sido agregada";
        header("location: ../views/novedad.php");
    }

    public function actualizarNovedad($tipo, $descripcion, $id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE novedad SET TIPO =?, DESCRIPCION= ? WHERE ID = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($tipo, $descripcion, $id));
        $conn = null;
        print"La novedad $tipo, $descripcion ha sido Actualizado";
        header("location: ../views/novedad.php");
    }

    public function consultarNovedad(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedad";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }

    public function consultarNovedadXId($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedad where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
};

?>