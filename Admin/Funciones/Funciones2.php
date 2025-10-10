<?php
if (!empty($_POST["registro"])) {
    if (
        empty($_POST["nombre"]) ||
        empty($_POST["apellido"]) ||
        empty($_POST["usuario"]) ||
        empty($_POST["clave"])
    ) {
        echo '<p style="color:red;">Uno de los campos está vacío</p>';
    } else {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $apellido = htmlspecialchars($_POST["apellido"]);
        $usuario = htmlspecialchars($_POST["usuario"]);
        $clave = password_hash($_POST["clave"], PASSWORD_DEFAULT);

        // Verificar si el usuario ya existe
        $verificar = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE usuario = :usuario");
        $verificar->bindParam(':usuario', $usuario);
        $verificar->execute();
        $existe = $verificar->fetchColumn();

        if ($existe > 0) {
            echo '<p style="color:red;">El usuario ya fue registrado. Intenta con otro.</p>';
        } else {
            $sql = $conn->prepare("INSERT INTO usuarios (nombre, apellido, usuario, clave) VALUES (:nombre, :apellido, :usuario, :clave)");
            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':apellido', $apellido);
            $sql->bindParam(':usuario', $usuario);
            $sql->bindParam(':clave', $clave);

            if ($sql->execute()) {
                echo '<p style="color:green;">Usuario registrado correctamente</p>';
            } else {
                echo '<p style="color:red;">Error al registrar</p>';
            }
        }
    }
}
?>