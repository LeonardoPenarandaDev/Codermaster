<?php
require_once __DIR__ . '/../includes/functions.php';

$proyectos = require __DIR__ . '/../data/proyectos.php';
$slug = $_GET['slug'] ?? '';

$proyecto = null;
foreach ($proyectos as $p) {
    if ($p['slug'] === $slug) {
        $proyecto = $p;
        break;
    }
}

if (!$proyecto) {
    http_response_code(404);
    $pageTitle = 'Proyecto no encontrado';
    require __DIR__ . '/../includes/header.php';
    ?>
    <section class="section container text-center">
      <h1>Proyecto no encontrado</h1>
      <p style="color:var(--color-muted); margin: 16px 0 28px;">El proyecto que buscas no existe o fue movido.</p>
      <a href="<?= e(site_url('/portafolio')) ?>" class="btn btn-primary">Volver al portafolio</a>
    </section>
    <?php
    require __DIR__ . '/../includes/footer.php';
    exit;
}

$pageTitle = $proyecto['titulo'];
$pageDescription = $proyecto['resumen'];
require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero" style="background: linear-gradient(135deg, <?= e($proyecto['color']) ?>, #0f172a);">
  <div class="container">
    <h1><?= e($proyecto['titulo']) ?></h1>
    <p><?= e($proyecto['resumen']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container project-detail">
    <div class="tags">
      <?php foreach ($proyecto['tecnologias'] as $tech): ?>
        <span class="tag"><?= e($tech) ?></span>
      <?php endforeach; ?>
    </div>
    <p><?= nl2br(e($proyecto['descripcion'])) ?></p>
    <div>
      <a href="<?= e($proyecto['enlace']) ?>" class="btn btn-primary" target="_blank" rel="noopener">Ver proyecto</a>
      <a href="<?= e(site_url('/portafolio')) ?>" class="btn btn-outline">Volver al portafolio</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
