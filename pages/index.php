<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv([
    'es' => 'Diseño Web en Cúcuta, Los Patios y Norte de Santander',
    'en' => 'Web Design in Cúcuta, Los Patios and Norte de Santander',
]);
$pageDescription = tv([
    'es' => 'Diseño y desarrollo de páginas web y aplicaciones con Laravel en Cúcuta, Los Patios y Norte de Santander. CoderMaster crea soluciones digitales a medida para tu negocio.',
    'en' => 'Website design and Laravel application development in Cúcuta, Los Patios and Norte de Santander. CoderMaster builds custom digital solutions for your business.',
]);
require __DIR__ . '/../includes/header.php';

$proyectos = require __DIR__ . '/../data/proyectos.php';
$destacados = array_slice(array_filter($proyectos, fn($p) => $p['destacado']), 0, 3);
$clientes = require __DIR__ . '/../data/clientes.php';
?>

<section class="hero">
  <div class="container hero-inner">
    <div>
      <span class="eyebrow"><?= tv(['es' => 'Diseño web en Cúcuta, Los Patios y Norte de Santander', 'en' => 'Web design in Cúcuta, Los Patios and Norte de Santander']) ?></span>
      <h1><?= tv(['es' => 'Convertimos tus ideas en páginas web y aplicaciones que funcionan', 'en' => 'We turn your ideas into websites and applications that work']) ?></h1>
      <p><?= tv([
        'es' => 'Desarrollamos sitios web y aplicaciones a medida para negocios de Cúcuta, Los Patios y Norte de Santander, incluyendo soluciones robustas con Laravel, pensadas para ayudarte a captar clientes y ordenar tu negocio.',
        'en' => 'We build custom websites and applications for businesses in Cúcuta, Los Patios and Norte de Santander, including robust Laravel solutions designed to help you attract customers and organize your business.',
      ]) ?></p>
      <div class="hero-actions">
        <a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-primary"><?= tv(['es' => 'Ver portafolio', 'en' => 'View portfolio']) ?></a>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline" style="border-color:#ffffff33;color:#fff;"><?= tv(['es' => 'Cotiza tu proyecto', 'en' => 'Get a quote']) ?></a>
      </div>
    </div>
    <div class="hero-card">
      <ul>
        <li><span class="dot"></span><div><strong><?= tv(['es' => 'Páginas web a medida', 'en' => 'Custom websites']) ?></strong><?= tv(['es' => 'Diseños propios, rápidos y responsive.', 'en' => 'Original designs, fast and responsive.']) ?></div></li>
        <li><span class="dot"></span><div><strong><?= tv(['es' => 'Aplicaciones con Laravel', 'en' => 'Laravel applications']) ?></strong><?= tv(['es' => 'Sistemas a la medida de tu negocio.', 'en' => 'Systems tailored to your business.']) ?></div></li>
        <li><span class="dot"></span><div><strong><?= tv(['es' => 'Soporte continuo', 'en' => 'Ongoing support']) ?></strong><?= tv(['es' => 'Acompañamiento después de la entrega.', 'en' => 'Support after delivery.']) ?></div></li>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Qué hacemos', 'en' => 'What we do']) ?></span>
      <h2><?= tv(['es' => 'Servicios pensados para tu negocio', 'en' => 'Services designed for your business']) ?></h2>
      <p><?= tv(['es' => 'Desde una landing page hasta un sistema completo, cubrimos cada etapa del desarrollo.', 'en' => 'From a landing page to a full system, we cover every stage of development.']) ?></p>
    </div>
    <div class="grid-cards">
      <div class="card">
        <div class="icon"><?= icon('globe') ?></div>
        <h3><?= tv(['es' => 'Páginas web', 'en' => 'Websites']) ?></h3>
        <p><?= tv(['es' => 'Sitios corporativos y landing pages con diseño propio, optimizados para convertir visitas en clientes.', 'en' => 'Corporate sites and landing pages with original design, optimized to convert visits into customers.']) ?></p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('code') ?></div>
        <h3><?= tv(['es' => 'Aplicaciones con Laravel', 'en' => 'Laravel applications']) ?></h3>
        <p><?= tv(['es' => 'Sistemas a medida: inventarios, reservas, paneles administrativos y más, con Laravel y buenas prácticas.', 'en' => 'Custom systems: inventory, bookings, admin dashboards and more, built with Laravel and best practices.']) ?></p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('cart') ?></div>
        <h3><?= tv(['es' => 'Tiendas online', 'en' => 'Online stores']) ?></h3>
        <p><?= tv(['es' => 'E-commerce completos con carrito, pagos y panel de administración para gestionar tus productos.', 'en' => 'Full e-commerce stores with cart, payments and an admin panel to manage your products.']) ?></p>
      </div>
    </div>
    <p class="text-center mt-32"><a href="<?= e(page_url('/servicios')) ?>" class="btn btn-outline"><?= tv(['es' => 'Ver todos los servicios', 'en' => 'View all services']) ?></a></p>
  </div>
</section>

<?php if (!empty($destacados)): ?>
<section class="section" style="background:var(--color-bg);">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Trabajos recientes', 'en' => 'Recent work']) ?></span>
      <h2><?= tv(['es' => 'Proyectos destacados', 'en' => 'Featured projects']) ?></h2>
      <p><?= tv(['es' => 'Algunas de las aplicaciones y páginas que hemos desarrollado.', 'en' => 'Some of the applications and websites we have developed.']) ?></p>
    </div>
    <div class="grid-cards">
      <?php foreach ($destacados as $p): ?>
      <a href="<?= e(page_url('/portafolio/' . $p['slug'])) ?>" class="project-card">
        <div class="project-thumb" style="background: linear-gradient(135deg, <?= e($p['color']) ?>, var(--color-dark));">
          <span><?= e(mb_strtoupper(mb_substr(tv($p['titulo']), 0, 2))) ?></span>
        </div>
        <div class="project-info">
          <h3><?= e(tv($p['titulo'])) ?></h3>
          <p><?= e(tv($p['resumen'])) ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <p class="text-center mt-32"><a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-outline"><?= tv(['es' => 'Ver todo el portafolio', 'en' => 'View full portfolio']) ?></a></p>
  </div>
</section>
<?php endif; ?>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Confianza', 'en' => 'Trust']) ?></span>
      <h2><?= tv(['es' => 'Empresas que han confiado en nosotros', 'en' => 'Companies that have trusted us']) ?></h2>
      <p><?= tv(['es' => 'Instituciones y negocios para los que hemos desarrollado páginas web y sistemas a medida.', 'en' => 'Institutions and businesses for whom we have developed websites and custom systems.']) ?></p>
    </div>
    <div class="clients-grid">
      <?php foreach ($clientes as $c): ?>
        <?php if ($c['logo']): ?>
        <a class="client-card" href="<?= e($c['enlace']) ?>" title="<?= e($c['nombre']) ?>">
          <img src="<?= e(site_url('/assets/img/clientes/' . $c['logo'])) ?>" alt="<?= e($c['nombre']) ?>" loading="lazy">
        </a>
        <?php else: ?>
        <div class="client-card client-card-placeholder" title="<?= e($c['nombre']) ?>">
          <span class="client-initial"><?= e(mb_strtoupper(mb_substr($c['nombre'], 0, 1))) ?></span>
          <span class="client-name"><?= e($c['nombre']) ?></span>
        </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0;">
  <div class="container">
    <div class="cta">
      <h2><?= tv(['es' => '¿Tienes un proyecto en mente?', 'en' => 'Have a project in mind?']) ?></h2>
      <p><?= tv(['es' => 'Cuéntanos qué necesitas y te ayudamos a hacerlo realidad.', 'en' => 'Tell us what you need and we will help you make it happen.']) ?></p>
      <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-light"><?= tv(['es' => 'Hablemos de tu proyecto', 'en' => "Let's talk about your project"]) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
