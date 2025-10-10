<?php

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["Usuario"]) || empty($_POST["password"])) {
        echo '<p style="color:red;">Los campos están vacíos</p>';
    } else {
        $usuario = $_POST["Usuario"];
        $claveIngresada = $_POST["password"];

        $stmt = $conn->prepare("SELECT clave FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $datos = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($claveIngresada, $datos["clave"])) {
                header("Location: ../Main/Bienvenida.php");
                exit;
            } else {
                echo '<p style="color:red;">Contraseña incorrecta</p>';
            }
        } else {
            echo '<p style="color:red;">Usuario no encontrado</p>';
        }
    }
}

?>