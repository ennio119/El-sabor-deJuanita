<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/Css/Style_Inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
    
</head>

<body>

    <body style="background-color: #434dbc;">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../Assets/img/El_sabor_de_juanita_isotipo.jpg" alt="Logo" width="30" height="30" class="Hover">
                    El Sabor de Juanita</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="Bienvenida.php">Bienvenida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Promociones.php">Promociones</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="Reservaciones.php">Reservaciones</a>
                            </a>
                        </li>
                </div>
            </div>
        </nav>
        <hr>


 <div class="container mt-4 p-4 rounded shadow" style="background-color: #fff8f0; border: 2px solid #f0c090;">
  <h3 class="text-center fw-bold text-dark mb-4">Nuestro Menú</h3>
  <div class="row justify-content-center"> </div>


<?php
require_once("Funciones/Conexion.php");
require_once("Funciones/Funciones1.php");
?>


</div>

            <div class="Visitanos" style="border: 2px solid #f0c090;">
                <div class="contenedor_footer">
                    <div class="container mt-5 p-4 rounded shadow">
                        <h4 class="fw-bold text-center mb-4 text-dark">Visítanos</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold text-secondary">Dirección</h6>
                                <p class="text-dark">
                                    Quiosco El Sabor de Juanita<br>
                                    Rotonda Hugo Chavez, Managua, Nicaragua
                                </p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <h6 class="fw-bold text-secondary">Horarios</h6>
                                <ul class="list-unstyled text-dark">
                                    <li><strong>Lunes a Viernes:</strong> 09:00 AM – 07:00 PM</li>
                                    <li><strong>Sábado:</strong> 09:00 AM – 07:00 PM</li>
                                    <li><strong>Domingo:</strong> 09:00 AM – 07:00 PM</li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <a class="Links-logo" href="https://www.facebook.com/share/16mCJU6u96/"><img src="../Assets/img/facebook.png"
                                    alt="Facebook" width="35"></a>


                            <a class="Links-logo" href="https://www.instagram.com/sabor_juanita42/"><img src="../Assets/img/Instagram.png"
                                    alt="Facebook" width="35"></a>


                            <a class="Links-logo" href="https://www.tiktok.com/@saborjuanaita_?is_from_webapp=1&sender_device=pc"><img
                                    src="../Assets/img/images.png" alt="Tiktok" width="35"></a>


                            <a class="Links-logo" href="https://chat.whatsapp.com/JTKrTCUM0f22P3xD84bhkF"><img
                                    src="../Assets/img/whatsapp.png" alt="Whatsapp" width="35"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>