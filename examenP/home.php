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
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                    <a class="nav-link" href="#" id="doctor-link">Doctores</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        $("#doctor-link").click ( function () {
            $.get("doctores/", function (data) {
                $("#workspace").html(data);
            });
        })
    });
</script>
<script src= https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js></script>
</body>
</html>