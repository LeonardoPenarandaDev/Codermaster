<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv([
    'es' => 'Portafolio de Páginas Web en Cúcuta',
    'en' => 'Web Design Portfolio in Cúcuta',
]);
$pageDescription = tv([
    'es' => 'Conoce algunos de los proyectos y aplicaciones web que hemos desarrollado para negocios en Cúcuta, Los Patios y Norte de Santander.',
    'en' => 'See some of the projects and web applications we have developed for businesses in Cúcuta, Los Patios and Norte de Santander.',
]);
require __DIR__ . '/../includes/header.php';

$proyectos = require __DIR__ . '/../data/proyectos.php';
?>

<section class="page-hero">
  <div class="container">
    <h1><?= tv(['es' => 'Nuestro Portafolio', 'en' => 'Our Portfolio']) ?></h1>
    <p><?= tv([
      'es' => 'Una muestra de las aplicaciones y páginas web que hemos desarrollado para nuestros clientes.',
      'en' => 'A sample of the applications and websites we have developed for our clients.',
    ]) ?></p>
  </div>
</section>

<section class="section">
  <div class="container grid-cards">
    <?php foreach ($proyectos as $p): ?>
    <a href="<?= e(page_url('/portafolio/' . $p['slug'])) ?>" class="project-card">
      <?php if (!empty($p['logo'])): ?>
      <div class="project-thumb has-logo">
        <img src="<?= e(site_url('/assets/img/clientes/' . $p['logo'])) ?>" alt="<?= e(tv($p['titulo'])) ?>" loading="lazy">
      </div>
      <?php else: ?>
      <div class="project-thumb" style="background: linear-gradient(135deg, <?= e($p['color']) ?>, var(--color-dark));">
        <span><?= e(mb_strtoupper(mb_substr(tv($p['titulo']), 0, 2))) ?></span>
      </div>
      <?php endif; ?>
      <div class="project-info">
        <h3><?= e(tv($p['titulo'])) ?></h3>
        <p><?= e(tv($p['resumen'])) ?></p>
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
