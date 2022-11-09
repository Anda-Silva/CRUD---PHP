<?php

include_once("../models/classCoordinador.php");
if(!isset($_REQUEST['id'])){
$_REQUEST['id'] = 0;
}

if(!isset($_REQUEST["coordinador"])){
    if(($_REQUEST['id']!=null) && ($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];    
        $nuevoCoordinador = new Coordinador ();   
        $nuevoCoordinador -> borrarCoordinador($id);
}
elseif(isset($_REQUEST["botonAdd"])) {
    header("location: ../views/coordinador/addCoordinador.php");
}
elseif(isset($_REQUEST["Coordinador"]) && ($_REQUEST["Coordinador"] != null)){
    $nombre = $_REQUEST['nuevoNombre'];
    $apellido = $_REQUEST['nuevoApellido'];
    $correo = $_REQUEST['nuevoCorreo'];
    $programa = $_REQUEST['nuevoPrograma'];
    $coordinador = new Coordinador();
    $coordinador -> addCoordinador($nombre, $apellido, $correo, $programa);
}
elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualiza")) {
    header("location: ../views/coordinador/actCoordinador.php?id=".$_REQUEST['id']);
}
elseif(isset($_POST["Coordinadorr"]) && ($_REQUEST['Coordinadorr'] != null)){
    $id = $_REQUEST['nuevoId'];
    $nombre = $_REQUEST["nuevoNombre"];
    $apellido = $_REQUEST["nuevoApellido"];
    $correo = $_REQUEST["nuevoCorreo"];
    $programa = $_REQUEST["nuevoPrograma"];
    $coordinador = new Coordinador();
    $coordinador -> actualizarCoordinador($nombre,$apellido, $correo, $programa, $id);
 };
}

elseif($_REQUEST["coordinador"] ==1){
    header("location: ../views/coordinador.php");
};  


?>