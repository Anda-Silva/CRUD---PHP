<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../19-10/public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,700;0,900;1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>INICIO</title>
    
    <?php 

    print("

    <nav class='navbar navbar-dark bg-dark fixed-top'>
    <div class='container-fluid'>
      <a class='navbar-brand' href='#'>EJERCICIO DE PHP</a>
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
              <a class='nav-link active' aria-current='page' href='./ejercicio_2.php'>Inicio</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='../19-10/views/aprendiz.php'>Aprendiz</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='../19-10/views/coordinador.php'>Coordinador</a>
            </li><li class='nav-item'>
            <a class='nav-link' href='../19-10/views/novedad.php'>Novedad</a>
          </li>
          </form>
        </div>
      </div>
    </div>
  </nav>

    <br>
    <br>
    <br>

    <div id='carouselExampleFade' class='carousel slide carousel-fade' data-bs-ride='carousel'>
        <div class='carousel-inner'>
            <div class='carousel-item active'>
                <img src='https://www.enter.co/wp-content/uploads/2020/12/Programacion-codigo-768x432.jpg' class='d-block w-100' alt='...'>
            </div>
            <div class='carousel-item'>
                <img src='https://www.enter.co/wp-content/uploads/2021/08/4884785-768x432.jpg' class='d-block w-100' alt='...''>
            </div>
            <div class='carousel-item'>
                <img src='https://www.enter.co/wp-content/uploads/2021/02/4401280-768x432.jpg' class='d-block w-100' alt='...'>
            </div>
        </div>
        <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleFade' data-bs-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='visually-hidden'>Previous</span>
        </button>
        <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleFade' data-bs-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='visually-hidden'>Next</span>
        </button>
    </div>

    ")
?>