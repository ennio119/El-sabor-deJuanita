<?php
require_once 'Funciones/conexion.php'; // Ruta corregida

$sql = "SELECT * FROM menu WHERE estado = 'Activo'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-4 p-4 rounded shadow" style="background-color: #fff8f0; border: 2px solid #f0c090;">
  <div class="row justify-content-center">
    <?php if (!empty($items)): ?>
      <?php foreach ($items as $item): ?>
        <div class="col-lg-10 text-center mb-4">
          <img src="<?= htmlspecialchars($item['Imagen']) ?>" alt="<?= htmlspecialchars($item['nombre']) ?>" class="img-fluid rounded shadow" style="width: 100%; max-width: 1000px;">
          <hr>
          <p><?= htmlspecialchars($item['Descripcion']) ?></p>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-lg-10 text-center">
        <p class="text-muted">No hay elementos activos en el menú.</p>
      </div>
    <?php endif; ?>
  </div>
</div>