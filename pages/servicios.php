<?php
$pageTitle = 'Servicios';
$pageDescription = 'Diseño de páginas web, aplicaciones con Laravel, tiendas online, mantenimiento y soporte para negocios en Colombia.';
require __DIR__ . '/../includes/header.php';

$servicios = [
    ['icon' => 'globe', 'titulo' => 'Páginas web corporativas', 'desc' => 'Sitios web a medida, con diseño propio, responsive y optimizados para que tu negocio luzca profesional.'],
    ['icon' => 'code', 'titulo' => 'Aplicaciones a medida con Laravel', 'desc' => 'Sistemas web hechos a la medida de tus procesos: inventarios, reservas, gestión de clientes, paneles internos.'],
    ['icon' => 'cart', 'titulo' => 'Tiendas online', 'desc' => 'E-commerce con catálogo de productos, carrito de compras, pagos y panel de administración.'],
    ['icon' => 'rocket', 'titulo' => 'Landing pages', 'desc' => 'Páginas de aterrizaje enfocadas en conversión, ideales para campañas, lanzamientos y captación de leads.'],
    ['icon' => 'edit', 'titulo' => 'Páginas autoadministrables con WordPress', 'desc' => 'Sitios en WordPress que tú mismo editas: textos, imágenes y contenido, sin depender de un programador para cada cambio.'],
    ['icon' => 'wrench', 'titulo' => 'Mantenimiento y soporte', 'desc' => 'Actualizaciones, corrección de errores y mejoras continuas para que tu sitio o app siga funcionando sin problemas.'],
    ['icon' => 'trending', 'titulo' => 'SEO básico', 'desc' => 'Buenas prácticas de estructura, velocidad y metadatos para ayudar a que tu sitio sea encontrado en Google.'],
];
?>

<section class="page-hero">
  <div class="container">
    <h1>Nuestros Servicios</h1>
    <p>Soluciones digitales a la medida, desde una landing page hasta un sistema completo con Laravel.</p>
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
      <h2>¿No sabes qué servicio necesitas?</h2>
      <p>Cuéntanos tu idea y te recomendamos la mejor solución para tu negocio.</p>
      <a href="<?= e(site_url('/contacto')) ?>" class="btn btn-light">Solicitar asesoría</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
