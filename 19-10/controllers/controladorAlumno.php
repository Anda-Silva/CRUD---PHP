<?php

include_once("../models/classAlumno.php");
if(!isset($_REQUEST['id'])){
$_REQUEST['id'] = 0;
}
    
if(!isset($_REQUEST["alumno"])){
    if(($_REQUEST['id']!=null) && ($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];
        $nuevoAprendiz = new Aprendiz();
        $nuevoAprendiz -> borrarAprendiz($id);
}
elseif(isset($_REQUEST["botonAdd"])) {
        header("location: ../views/alumno/addAlumno.php");
}
elseif(isset($_REQUEST["nuevoAlumno"])&& ($_REQUEST["nuevoAlumno"] != null)){
    $nombre = $_REQUEST['nuevoNombre'];
    $apellido = $_REQUEST['nuevoApellido'];
    $correo = $_REQUEST['nuevoCorreo'];
    $telefono = $_REQUEST['nuevoTelefono'];
    $programa = $_REQUEST['nuevoPrograma'];
    $alumno = new Aprendiz();
    $alumno -> addAlumno($nombre,$apellido, $correo, $telefono, $programa);
}
elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualiza")) {
    header("location: ../views/alumno/actAlumno.php?id=".$_REQUEST['id']);
}
elseif(isset($_POST["Alumno"]) && ($_REQUEST['Alumno'] != null)){
    $id = $_REQUEST['nuevoId'];
    $nombre = $_REQUEST["nuevoNombre"];
    $apellido = $_REQUEST["nuevoApellido"];
    $correo = $_REQUEST["nuevoCorreo"];
    $telefono = $_REQUEST["nuevoTelefono"];
    $programa = $_REQUEST["nuevoPrograma"];
    $aprendiz = new Aprendiz();
    $aprendiz -> actualizarAlumno($nombre,$apellido, $correo, $telefono, $programa, $id);
 };
}

elseif($_REQUEST["alumno"] ==1){
    header("location: ../views/aprendiz.php");
};  

?>