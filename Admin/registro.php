
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro - El Sabor de Juanita</title>
  <link rel="stylesheet" href="../Assets/Css/Style_Registro.css" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="registro-container">
    <div class="registro-card">
      <img src="../Assets/img/El_sabor_de_juanita_isotipo.jpg" alt="Logo" width="60" height="60" class="Hover" alt="El Sabor de Juanita" class="logo"/>
      <h2 class="titulo">Crear Cuenta</h2>
      <p class="subtitle">Regístrate para acceder al sistema</p>
      <form action="" method="POST">

      <?php
require_once("Funciones/conexion.php");
require_once("Funciones/Funciones2.php");
?>

        <div class="Nombre">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre"/>
        </div>
        <div class="apellido">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido"/>
        </div>
        <div class="usuario">
          <label for="usuario">Usuario</label>
          <input type="text" name="usuario"/>
        </div>
        <div class="clave">
          <label for="password">Contraseña</label>
          <input type="password" name="clave"/>
        </div>
          <div class="cuenta">
          <input class="boton" type="submit" value="Registrar" name="registro" />
          <a href="login.php">Salir</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>