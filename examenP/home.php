<?php
    session_start ();

if (!isset($_SESSION['usuario'])){
    echo '
        <script> 
        alert ("Por favor debes iniciar sesion");
        window.location = "index.php";
        </script>
        
    ';
    session_destroy ();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color: #421b46;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <a class="navbar-brand mx-auto" href="#">
            <img src="imacarru/icono.jpg" alt="Logo" height="70">
    </a>
<div class="container-fluid">
    <a class="navbar-brand" href="php/cerrar_sesion.php">Cerrar Sesion</a>
  </div>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                    <a class="nav-link" href="home.php" id="home-link">Home</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="usuarios-link">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="productos-link">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="clientes-link">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="ventas-link">Ventas</a>
                </li>
            </ul>   
    </div>
</nav>


<div class="container mt-4" id="workspace">
    <link rel="stylesheet" href="estilos.css">
    
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="imacarru/belleza1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="imacarru/belleza2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imacarru/belleza3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<script>
    $(document).ready(function () {

        $("#usuarios-link").click ( function () {
            $.get("usuarios/", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#productos-link").click ( function () {
            $.get("productos/", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#clientes-link").click ( function () {
            $.get("clientes/", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#ventas-link").click ( function () {
            $.get("ventas/", function (data) {
                $("#workspace").html(data);
            });
        });

    });
</script>


<script src= https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>