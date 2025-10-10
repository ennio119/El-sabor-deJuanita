<?php
require_once 'conexion.php';

$sql = "SELECT titulo, descripcion, imagen, enlace FROM promociones WHERE estado = 'Activo'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$promos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="promo-section container mt-5">
  <h2 class="text-center mb-4">Promociones Especiales</h2>
  <div class="promo-cards d-flex flex-wrap justify-content-center gap-4">

    <?php foreach ($promos as $promo): ?>
      <div class="promo-card" style="width: 300px; border: 1px solid #2d26b0ff; border-radius: 8px; overflow: hidden;">
        <img src="<?= htmlspecialchars($promo['imagen']) ?>" alt="<?= htmlspecialchars($promo['titulo']) ?>" style="width: 100%; height: 200px; object-fit: cover;">
        <div class="promo-content p-3">
          <h3><?= htmlspecialchars($promo['titulo']) ?></h3>
          <p><?= htmlspecialchars($promo['descripcion']) ?></p>
          <a href="<?= htmlspecialchars($promo['enlace']) ?>" class="btn btn-primary">Ver promoción</a>
        </div>
      </div>
    <?php endforeach; ?>

  </div>