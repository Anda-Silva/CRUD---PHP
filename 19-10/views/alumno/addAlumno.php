<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ADD ALUMNO</title>
</head>
<body>

    <form action="../../controllers/controladorAlumno.php" method="post">
    <div class="login-box">
        <h2>Agregar Alumno</h2>
          <div class="user-box">
            <input type="text" name="nuevoNombre" id="nuevoNombre" required="">
            <label>Nombre:</label>
          </div>
          <div class="user-box">
            <input type="text" name="nuevoApellido" id="nuevoApellido" required="">
            <label>Apellido</label>
          </div>
          <div class="user-box">
            <input type="email" name="nuevoCorreo" id="nuevoCorreo" required="">
            <label>Correo:</label>
          </div>
          <div class="user-box">
            <input type="number" name="nuevoTelefono" id="nuevoTelefono" required="">
            <label>Telefono</label>
          </div>
          <div class="user-box">
            <input type="text" name="nuevoPrograma" id="nuevoPrograma" required="">
            <label>Programa:</label>
          </div>
          <input type="submit" class="btn btn-primary" name="nuevoAlumno" id="nuevoAlumno" value="Enviar"/>
          <input type="reset" class="btn btn-primary" name="" id="" value="Restablecer">
          <br>
          <br>
          <a href="../aprendiz.php">Regresar</a>
    </form>
    </div>
</body>
</html>

