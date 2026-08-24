<?php
$pageTitle = 'Portafolio de Páginas Web en Cúcuta';
$pageDescription = 'Conoce algunos de los proyectos y aplicaciones web que hemos desarrollado para negocios en Cúcuta, Los Patios y Norte de Santander.';
require __DIR__ . '/../includes/header.php';

$proyectos = require __DIR__ . '/../data/proyectos.php';
?>

<section class="page-hero">
  <div class="container">
    <h1>Nuestro Portafolio</h1>
    <p>Una muestra de las aplicaciones y páginas web que hemos desarrollado para nuestros clientes.</p>
  </div>
</section>

<section class="section">
  <div class="container grid-cards">
    <?php foreach ($proyectos as $p): ?>
    <a href="<?= e(site_url('/portafolio/' . $p['slug'])) ?>" class="project-card">
      <div class="project-thumb" style="background: linear-gradient(135deg, <?= e($p['color']) ?>, var(--color-dark));">
        <span><?= e(mb_strtoupper(mb_substr($p['titulo'], 0, 2))) ?></span>
      </div>
      <div class="project-info">
        <h3><?= e($p['titulo']) ?></h3>
        <p><?= e($p['resumen']) ?></p>
        <div class="tags">
          <?php foreach ($p['tecnologias'] as $tech): ?>
            <span class="tag"><?= e($tech) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
