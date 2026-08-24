<?php
$pageTitle = 'Diseño Web y Apps Laravel en Colombia';
$pageDescription = 'Diseño web y desarrollo de aplicaciones con Laravel en Colombia. CoderMaster crea soluciones digitales a medida para tu negocio.';
require __DIR__ . '/../includes/header.php';

$proyectos = require __DIR__ . '/../data/proyectos.php';
$destacados = array_slice(array_filter($proyectos, fn($p) => $p['destacado']), 0, 3);
?>

<section class="hero">
  <div class="container hero-inner">
    <div>
      <span class="eyebrow">Diseño web &amp; aplicaciones a medida</span>
      <h1>Convertimos tus ideas en páginas web y aplicaciones que funcionan</h1>
      <p>Desarrollamos sitios web y aplicaciones a medida, incluyendo soluciones robustas con Laravel, pensadas para ayudarte a captar clientes y ordenar tu negocio.</p>
      <div class="hero-actions">
        <a href="<?= e(site_url('/portafolio')) ?>" class="btn btn-primary">Ver portafolio</a>
        <a href="<?= e(site_url('/contacto')) ?>" class="btn btn-outline" style="border-color:#ffffff33;color:#fff;">Cotiza tu proyecto</a>
      </div>
    </div>
    <div class="hero-card">
      <ul>
        <li><span class="dot"></span><div><strong>Páginas web a medida</strong>Diseños propios, rápidos y responsive.</div></li>
        <li><span class="dot"></span><div><strong>Aplicaciones con Laravel</strong>Sistemas a la medida de tu negocio.</div></li>
        <li><span class="dot"></span><div><strong>Soporte continuo</strong>Acompañamiento después de la entrega.</div></li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Qué hacemos</span>
      <h2>Servicios pensados para tu negocio</h2>
      <p>Desde una landing page hasta un sistema completo, cubrimos cada etapa del desarrollo.</p>
    </div>
    <div class="grid-cards">
      <div class="card">
        <div class="icon"><?= icon('globe') ?></div>
        <h3>Páginas web</h3>
        <p>Sitios corporativos y landing pages con diseño propio, optimizados para convertir visitas en clientes.</p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('code') ?></div>
        <h3>Aplicaciones con Laravel</h3>
        <p>Sistemas a medida: inventarios, reservas, paneles administrativos y más, con Laravel y buenas prácticas.</p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('cart') ?></div>
        <h3>Tiendas online</h3>
        <p>E-commerce completos con carrito, pagos y panel de administración para gestionar tus productos.</p>
      </div>
    </div>
    <p class="text-center mt-32"><a href="<?= e(site_url('/servicios')) ?>" class="btn btn-outline">Ver todos los servicios</a></p>
  </div>
</section>

<?php if (!empty($destacados)): ?>
<section class="section" style="background:var(--color-bg);">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Trabajos recientes</span>
      <h2>Proyectos destacados</h2>
      <p>Algunas de las aplicaciones y páginas que hemos desarrollado.</p>
    </div>
    <div class="grid-cards">
      <?php foreach ($destacados as $p): ?>
      <a href="<?= e(site_url('/portafolio/' . $p['slug'])) ?>" class="project-card">
        <div class="project-thumb" style="background: linear-gradient(135deg, <?= e($p['color']) ?>, var(--color-dark));">
          <span><?= e(mb_strtoupper(mb_substr($p['titulo'], 0, 2))) ?></span>
        </div>
        <div class="project-info">
          <h3><?= e($p['titulo']) ?></h3>
          <p><?= e($p['resumen']) ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <p class="text-center mt-32"><a href="<?= e(site_url('/portafolio')) ?>" class="btn btn-outline">Ver todo el portafolio</a></p>
  </div>
</section>
<?php endif; ?>

<section class="section">
  <div class="container">
    <div class="cta">
      <h2>¿Tienes un proyecto en mente?</h2>
      <p>Cuéntanos qué necesitas y te ayudamos a hacerlo realidad.</p>
      <a href="<?= e(site_url('/contacto')) ?>" class="btn btn-light">Hablemos de tu proyecto</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
