<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre1 = $_POST['nombre'];
        $personas1 = $_POST['personas'];
        $fecha1 = $_POST['fecha'];
        $hora1 = $_POST['hora'];
        $telefono1 = $_POST['telefono'];
        $comentarios1 = $_POST['comentarios'];

        $sql = "INSERT INTO reservas(nombre, personas, fecha, hora, telefono, comentarios) 
                VALUES (:nombre, :personas, :fecha, :hora, :telefono, :comentarios)";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nombre', $nombre1);
        $stmt->bindParam(':personas', $personas1);
        $stmt->bindParam(':fecha', $fecha1);
        $stmt->bindParam(':hora', $hora1);
        $stmt->bindParam(':telefono', $telefono1);
        $stmt->bindParam(':comentarios', $comentarios1);

        if ($stmt->execute()) {
            echo "Datos almacenados en la base de datos";
        } else {
            echo "Error al almacenar los datos en la base de datos";
        }
    }

?>