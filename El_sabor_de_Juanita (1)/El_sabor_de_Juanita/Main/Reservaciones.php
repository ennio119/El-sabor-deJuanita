
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reservaciones</title>
  <link rel="stylesheet" href="../Assets/Css/Style_Reservaciones.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
</head>

<body style="background-color: #434dbc;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="Bienvenida.html">
        <img src="../Assets/img/El_sabor_de_juanita_isotipo.jpg" alt="Logo" width="30" height="30" class="Hover">
        El Sabor de Juanita</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="Bienvenida.php">Bienvenida</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Menu.php">Menu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active" href="Promociones.php">Promociones</a>
            </a>
          </li>

      </div>
    </div>
  </nav>

<?php
require_once("Funciones/Conexion.php");
require_once("Funciones/Funciones3.php");
?>

  <section class="reservaciones mt-5">
    <h2 class="text-center mb-4">Reservaciones</h2>
    <form method="POST" action="Reservaciones.php">
      <div class="row g-3">
        <div class="col-md-6">
          <label for="nombre" class="form-label">Nombre completo</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Juanita López" required>
        </div>
        <div class="col-md-6">
          <label for="personas" class="form-label">Número de personas</label>
          <input type="number" class="form-control" name="personas" id="personas" min="1" max="6" placeholder="Ej. 4" required>
        </div>
        <div class="col-md-6">
          <label for="fecha" class="form-label">Fecha</label>
          <input type="date" class="form-control" name="fecha" id="fecha" required>
        </div>
        <div class="col-md-6">
          <label for="hora" class="form-label">Hora</label>
          <input type="time" class="form-control" name="hora" id="hora" required>
        </div>
         <div class="col-md-6">
          <label for="hora" class="form-label">Telefono</label>
          <input type="number" class="form-control" name="telefono" id="telefono" required>
        </div>
        <div class="col-12">
          <label for="comentarios" class="form-label">Comentarios adicionales</label>
          <textarea class="form-control" name="comentarios" id="comentarios" rows="3" placeholder="¿Algo mas que agregar?"></textarea>
        </div>
        <div class="col-12 text-center">
          <button class="btn btn-reservar" style="background-color: #434dbc; color:white;" >Reservar ahora</button>
        </div>
      </div>
    </form>
  </section>
</body>
<footer>

        <div class="Visitanos">
                <div class="contenedor_footer">
                    <div class="container mt-5 p-4 rounded shadow" style="background-color: #fff8f0; border: 2px solid #f0c090;">
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

</footer>

</html>