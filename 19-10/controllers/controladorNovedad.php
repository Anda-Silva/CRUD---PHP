<?php

include_once("../models/classNovedad.php");
if(!isset($_REQUEST['id'])){
$_REQUEST['id'] = 0;
}

 if(!isset($_REQUEST["novedad"])){
    if(($_REQUEST['id']!=null) && ($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];
        $nuevoNovedad = new Novedad ();
        $nuevoNovedad -> borrarNovedad($id); 
}

 if(isset($_REQUEST["botonAdd"])) {
     
    header("location: ../views/novedad/addNovedad.php");
}
elseif(isset($_REQUEST["Novedadd"])&& ($_REQUEST["Novedadd"] != null)){
   $tipo = $_REQUEST['nuevoTipo'];
   $descripcion = $_REQUEST['nuevaDescripcion'];
   $novedad = new Novedad();
   $novedad -> addNovedad($tipo, $descripcion);
}
elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualiza")) {
   header("location: ../views/novedad/actNovedad.php?id=".$_REQUEST['id']);
}
elseif(isset($_POST["Novedaddd"]) && ($_REQUEST['Novedaddd'] != null)){
   $id = $_REQUEST['nuevoId'];
   $tipo = $_REQUEST["nuevoTipo"];
   $descripcion = $_REQUEST["nuevaDescripcion"];
   $novedad = new Novedad();
   $novedad -> actualizarNovedad($tipo, $descripcion, $id);
};
}

elseif($_REQUEST["novedad"] ==1){
   header("location: ../views/novedad.php");
};  
 
?>