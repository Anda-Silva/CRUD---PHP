<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,700;0,900;1,600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>NOVEDAD</title>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</head>
</html>

<?php
    require_once("../models/classNovedad.php");
    $novedad = new Novedad();
    $datos = $novedad -> consultarNovedad();

print("
<nav class='navbar navbar-dark bg-dark fixed-top'>
<div class='container-fluid'>
  <a class='navbar-brand' href='#'>NOVEDAD</a>
  <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasDarkNavbar' aria-controls='offcanvasDarkNavbar'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='offcanvas offcanvas-end text-bg-dark' tabindex='-1' id='offcanvasDarkNavbar' aria-labelledby='offcanvasDarkNavbarLabel'>
    <div class='offcanvas-header'>
      <h5 class='offcanvas-title' id='offcanvasDarkNavbarLabel'>MENU</h5>
      <button type='button' class='btn-close btn-close-white' data-bs-dismiss='offcanvas' aria-label='Close'></button>
    </div>
    <div class='offcanvas-body'>
      <ul class='navbar-nav justify-content-end flex-grow-1 pe-3'>
        <li class='nav-item'>
          <a class='nav-link active' aria-current='page' href='../ejercicio_2.php'>Inicio</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='../vieWS/aprendiz.php'>Aprendiz</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='../views/coordinador.php'>Coordinador</a>
        </li><li class='nav-item'>
        <a class='nav-link' href='../views/novedad.php'>Novedad</a>
      </li>
      </form>
    </div>
  </div>
</div>
</nav>

    <br>
    <br>
    <br>
    <br>

    <form action='../views/novedad/addNovedad.php' method='POST'>
      <input type='submit' id='botonAdd' name='botonAdd' value='Add'>
     </form>

    <table id='example' class='table table-striped' style='width:100%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Descripcion</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        ");

        while ($data = $datos ->fetch(PDO::FETCH_ASSOC)){
          print "<tr>
              <td>" .$data['ID']."</td>
              <td>" .$data['TIPO']."</td>
              <td>" .$data['DESCRIPCION']."</td>
              <td>
              <!--  <a href='../controllers/controladorNovedad.php?id=" . $data['ID']. "&value=Actualiza'>
              -->   <input type='button' id='botonBor' name='botonBor' value='Update' onclick='validar(". $data['ID'].")'/>
                </a>
              </td>
              <td>
             <!--   <a href='../controllers/controladorNovedad.php?id=" . $data['ID']. "&value=Borra'>
             -->    <input type='button' id='botonBor' name='botonBor' value='Delete' onclick='borrar(". $data["ID"].")'/>
              </td>
            </tr>

        </tbody>";

          
  };
?>

<script type="text/javascript">

function validar(id){
    var dato = confirm("Seguro que desea actualizar la novedad? " + id);
  if(!dato){
    window.location.href="../views/novedad.php";
  }else{
    window.location.href="../controllers/controladorNovedad.php?id=" + id + "&value=Actualiza";
  }
}

  function borrar(id){
    var dato = confirm("Seguro que desea borrar la novedad? " + id);
  if(!dato){
    window.location.href="../views/novedad.php";
  }else{
    window.location.href="../controllers/controladorNovedad.php?id=" + id + "&value=Borra";
  }
  }
</script>