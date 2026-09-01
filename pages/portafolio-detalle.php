<?php
require_once __DIR__ . '/../includes/lang.php';

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
    $pageTitle = tv(['es' => 'Proyecto no encontrado', 'en' => 'Project not found']);
    require __DIR__ . '/../includes/header.php';
    ?>
    <section class="section container text-center">
      <h1><?= tv(['es' => 'Proyecto no encontrado', 'en' => 'Project not found']) ?></h1>
      <p style="color:var(--color-muted); margin: 16px 0 28px;"><?= tv([
        'es' => 'El proyecto que buscas no existe o fue movido.',
        'en' => 'The project you are looking for does not exist or has been moved.',
      ]) ?></p>
      <a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-primary"><?= tv(['es' => 'Volver al portafolio', 'en' => 'Back to portfolio']) ?></a>
    </section>
    <?php
    require __DIR__ . '/../includes/footer.php';
    exit;
}

$pageTitle = tv($proyecto['titulo']);
$pageDescription = tv($proyecto['resumen']);
require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero" style="background: linear-gradient(135deg, <?= e($proyecto['color']) ?>, var(--color-dark));">
  <div class="container">
    <h1><?= e(tv($proyecto['titulo'])) ?></h1>
    <p><?= e(tv($proyecto['resumen'])) ?></p>
  </div>
</section>

<section class="section">
  <div class="container project-detail">
    <div class="tags">
      <?php foreach ($proyecto['tecnologias'] as $tech): ?>
        <span class="tag"><?= e($tech) ?></span>
      <?php endforeach; ?>
    </div>
    <p><?= nl2br(e(tv($proyecto['descripcion']))) ?></p>
    <div>
      <a href="<?= e($proyecto['enlace']) ?>" class="btn btn-primary" target="_blank" rel="noopener"><?= tv(['es' => 'Ver proyecto', 'en' => 'View project']) ?></a>
      <a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-outline"><?= tv(['es' => 'Volver al portafolio', 'en' => 'Back to portfolio']) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
