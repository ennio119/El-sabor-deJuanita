<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - El Sabor de Juanita</title>
  <link rel="stylesheet" href="../Assets/Css/Style_Login.css" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <img src="../Assets/img/El_sabor_de_juanita_isotipo.jpg" alt="Logo" width="60" height="60" class="Hover" alt="El Sabor de Juanita" class="logo"/>
      <h2>Bienvenido</h2>
      <p class="subtitle">Acceso para personal del restaurante</p>

      <?php
require_once("Funciones/conexion.php");
require_once("Funciones/Funciones1.php");
?>


     <form id="loginForm" method="POST" action="">
  <div class="input-group">
    <label for="username">Usuario</label>
    <input type="text" id="Usuario" name="Usuario" placeholder="Ingresa tu usuario" required />
  </div>
  <div class="input-group">
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required />
  </div>
  <input class="boton" type="submit" value="Iniciar Sesión" name="btningresar" />
  <a href="registro.php">Crear Cuenta</a>
</form>
    </div>
  </div>
</body>
</html>