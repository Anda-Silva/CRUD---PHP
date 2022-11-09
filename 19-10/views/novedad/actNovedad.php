<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../public/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ACTUALIZAR NOVEDAD</title>
</head>
<body>
    <div class="login-box">
        <h2>Actualizar Novedad</h2>
        <?php
          require_once("../../models/classNovedad.php");
          $id = $_REQUEST['id'];
          $novedad = new Novedad();
          $datos = $novedad ->consultarNovedadXId($id);
          while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
        print ' <form action="../../controllers/controladorNovedad.php" method="post">
          <div class="user-box">
            <input type="hidden" value="'. $data['ID']. '" name="nuevoId" id="nuevoId" required="">
          </div>

          <div class="user-box">
            <input type="text" value="'. $data['TIPO']. '" name="nuevoTipo" id="nuevoTipo" required="">
            <label>Tipo:</label>
          </div>

          <div class="user-box">
            <input type="text" value="'. $data['DESCRIPCION']. '" name="nuevaDescripcion" id="nuevaDescripcion" required="">
            <label>Descripcion</label>
          </div>
          <input type="submit" class="btn btn-primary" name="Novedaddd" id="Novedaddd" value="Enviar"/>
          <input type="reset" class="btn btn-primary" name="" id="" value="Restablecer">
          <br>
          <a href="../novedad.php">Regresar</a>
        </form>
      </div>';
  }
  ?>
  
</body>
</html>
