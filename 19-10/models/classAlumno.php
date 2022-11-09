<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>CLASE ALUMNO</title>
</head>
<body>
    
</body>
</html>

<?php

class Aprendiz {
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;


    public function borrarAprendiz($idAprendiz) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from aprendiz where ID= ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($idAprendiz));
        $conn = null;
        header('location:../views/aprendiz.php');
        // print("<br/><br/>  El alumno # $idAprendiz con nombre $nombre ha sido borrado");
        // print("<br/><br/><br/><a class='boton' href='../views/aprendiz.php'>Regresar</a>");
    }

    public function añadirAprendiz($idAprendiz, $nombre, $apellido, $correo) {
        print("<br/><br/>  El alumno $idAprendiz con nombre $nombre $apellido y correo $correo ha sido añadido");
        print("<br/><br/><br/><a class='boton' href='../views/aprendiz.php'>Regresar</a>");
    }

    public function addAlumno($nombre, $apellido, $correo, $telefono, $programa) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into aprendiz (nombre, apellido, correo, telefono, programa) values(?, ?, ?, ?, ?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($nombre, $apellido, $correo, $telefono, $programa));
        $conn = null;
        print"El alumno $nombre, $apellido, $correo, $telefono, $programa ha sido agregado";
        header("location: ../views/aprendiz.php");
    }
    
    public function actualizarAlumno($nombre, $apellido, $correo,$telefono,$programa, $id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE aprendiz SET NOMBRE =?, APELLIDO= ?, CORREO= ?, TELEFONO= ?, PROGRAMA= ? WHERE ID = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute (Array($nombre, $apellido, $correo, $telefono, $programa, $id));
        $conn = null;
        print"El alumno $nombre, $apellido, $correo, $telefono, $programa ha sido Actualizado";
        header("location: ../views/aprendiz.php");
    }

    public function consultarAlumno(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from aprendiz";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }

    public function consultarAlumnoXId($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from aprendiz where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
};

?>