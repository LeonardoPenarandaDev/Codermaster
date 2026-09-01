<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv([
    'es' => 'Servicios de Diseño Web en Cúcuta y Norte de Santander',
    'en' => 'Web Design Services in Cúcuta and Norte de Santander',
]);
$pageDescription = tv([
    'es' => 'Diseño de páginas web, aplicaciones con Laravel, tiendas online, mantenimiento y soporte para negocios en Cúcuta, Los Patios y Norte de Santander.',
    'en' => 'Website design, Laravel applications, online stores, maintenance and support for businesses in Cúcuta, Los Patios and Norte de Santander.',
]);
require __DIR__ . '/../includes/header.php';

$servicios = [
    ['icon' => 'globe', 'titulo' => tv(['es' => 'Páginas web corporativas', 'en' => 'Corporate websites']), 'desc' => tv(['es' => 'Sitios web a medida, con diseño propio, responsive y optimizados para que tu negocio luzca profesional.', 'en' => 'Custom websites, with original design, responsive and optimized so your business looks professional.'])],
    ['icon' => 'code', 'titulo' => tv(['es' => 'Aplicaciones a medida con Laravel', 'en' => 'Custom applications with Laravel']), 'desc' => tv(['es' => 'Sistemas web hechos a la medida de tus procesos: inventarios, reservas, gestión de clientes, paneles internos.', 'en' => 'Web systems built around your processes: inventory, bookings, customer management, internal dashboards.'])],
    ['icon' => 'cart', 'titulo' => tv(['es' => 'Tiendas online', 'en' => 'Online stores']), 'desc' => tv(['es' => 'E-commerce con catálogo de productos, carrito de compras, pagos y panel de administración.', 'en' => 'E-commerce with product catalog, shopping cart, payments and admin panel.'])],
    ['icon' => 'rocket', 'titulo' => tv(['es' => 'Landing pages', 'en' => 'Landing pages']), 'desc' => tv(['es' => 'Páginas de aterrizaje enfocadas en conversión, ideales para campañas, lanzamientos y captación de leads.', 'en' => 'Conversion-focused landing pages, ideal for campaigns, launches and lead generation.'])],
    ['icon' => 'edit', 'titulo' => tv(['es' => 'Páginas autoadministrables con WordPress', 'en' => 'Self-managed websites with WordPress']), 'desc' => tv(['es' => 'Sitios en WordPress que tú mismo editas: textos, imágenes y contenido, sin depender de un programador para cada cambio.', 'en' => 'WordPress sites you can edit yourself: text, images and content, without depending on a developer for every change.'])],
    ['icon' => 'wrench', 'titulo' => tv(['es' => 'Mantenimiento y soporte', 'en' => 'Maintenance and support']), 'desc' => tv(['es' => 'Actualizaciones, corrección de errores y mejoras continuas para que tu sitio o app siga funcionando sin problemas.', 'en' => 'Updates, bug fixes and continuous improvements to keep your site or app running smoothly.'])],
    ['icon' => 'trending', 'titulo' => tv(['es' => 'SEO básico', 'en' => 'Basic SEO']), 'desc' => tv(['es' => 'Buenas prácticas de estructura, velocidad y metadatos para ayudar a que tu sitio sea encontrado en Google.', 'en' => 'Best practices for structure, speed and metadata to help your site get found on Google.'])],
];
?>

<section class="page-hero">
  <div class="container">
    <h1><?= tv(['es' => 'Nuestros Servicios', 'en' => 'Our Services']) ?></h1>
    <p><?= tv(['es' => 'Soluciones digitales a la medida, desde una landing page hasta un sistema completo con Laravel.', 'en' => 'Custom digital solutions, from a landing page to a full system built with Laravel.']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container grid-cards">
    <?php foreach ($servicios as $s): ?>
    <div class="card">
      <div class="icon"><?= icon($s['icon']) ?></div>
      <h3><?= e($s['titulo']) ?></h3>
      <p><?= e($s['desc']) ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section" style="padding-top:0;">
  <div class="container">
    <div class="cta">
      <h2><?= tv(['es' => '¿No sabes qué servicio necesitas?', 'en' => "Not sure which service you need?"]) ?></h2>
      <p><?= tv(['es' => 'Cuéntanos tu idea y te recomendamos la mejor solución para tu negocio.', 'en' => 'Tell us your idea and we will recommend the best solution for your business.']) ?></p>
      <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-light"><?= tv(['es' => 'Solicitar asesoría', 'en' => 'Request advice']) ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
