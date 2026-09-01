<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv(['es' => 'Sobre Nosotros', 'en' => 'About Us']);
$pageDescription = tv([
    'es' => 'Conoce a CoderMaster, especialistas en diseño web y desarrollo de aplicaciones a medida para negocios en Cúcuta, Los Patios y Norte de Santander.',
    'en' => 'Meet CoderMaster, specialists in web design and custom application development for businesses in Cúcuta, Los Patios and Norte de Santander.',
]);
require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1><?= tv(['es' => 'Sobre CoderMaster', 'en' => 'About CoderMaster']) ?></h1>
    <p><?= tv(['es' => 'Diseñamos y desarrollamos soluciones digitales a la medida de cada negocio.', 'en' => 'We design and develop digital solutions tailored to each business.']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container about-grid">
    <div>
      <span class="eyebrow"><?= tv(['es' => 'Quiénes somos', 'en' => 'Who we are']) ?></span>
      <h2 style="margin: 12px 0 16px;"><?= tv(['es' => 'Un emprendimiento enfocado en resultados reales', 'en' => 'A venture focused on real results']) ?></h2>
      <p style="color:var(--color-muted); margin-bottom: 16px;">
        <?= tv([
          'es' => 'CoderMaster nace con el objetivo de acercar soluciones de desarrollo web y de software a medida a negocios que buscan crecer en digital. Trabajamos de la mano de cada cliente para entender su proceso y entregar una página web o aplicación que realmente resuelva su problema.',
          'en' => 'CoderMaster was created to bring custom web development and software solutions to businesses looking to grow digitally. We work hand in hand with each client to understand their process and deliver a website or application that truly solves their problem.',
        ]) ?>
      </p>
      <p style="color:var(--color-muted);">
        <?= tv([
          'es' => 'Además de páginas web, desarrollamos aplicaciones a medida con Laravel: sistemas de inventario, gestión de citas, paneles administrativos y tiendas online, aplicando buenas prácticas de desarrollo y seguridad.',
          'en' => 'Beyond websites, we build custom applications with Laravel: inventory systems, appointment management, admin dashboards and online stores, applying development and security best practices.',
        ]) ?>
      </p>
    </div>
    <div class="hero-card" style="background:var(--color-bg); border-color:var(--color-border);">
      <ul>
        <li><span class="dot"></span><div style="color:var(--color-text);"><strong style="color:var(--color-dark);"><?= tv(['es' => 'Misión', 'en' => 'Mission']) ?></strong><?= tv(['es' => 'Ayudar a negocios y emprendedores a tener presencia digital y herramientas a medida para crecer.', 'en' => 'Help businesses and entrepreneurs gain a digital presence and custom tools to grow.']) ?></div></li>
        <li><span class="dot"></span><div style="color:var(--color-text);"><strong style="color:var(--color-dark);"><?= tv(['es' => 'Visión', 'en' => 'Vision']) ?></strong><?= tv(['es' => 'Ser el aliado de referencia en desarrollo web y de aplicaciones para pequeños y medianos negocios.', 'en' => 'Be the go-to partner for web and application development for small and medium businesses.']) ?></div></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="section-head" style="margin-top:64px;">
      <span class="eyebrow"><?= tv(['es' => 'Por qué elegirnos', 'en' => 'Why choose us']) ?></span>
      <h2><?= tv(['es' => 'Lo que nos diferencia', 'en' => 'What sets us apart']) ?></h2>
    </div>
    <div class="values-grid">
      <div class="card">
        <div class="icon"><?= icon('target') ?></div>
        <h3><?= tv(['es' => 'Soluciones a medida', 'en' => 'Custom solutions']) ?></h3>
        <p><?= tv(['es' => 'Cada proyecto se diseña según las necesidades reales del cliente, sin plantillas genéricas.', 'en' => "Every project is designed around the client's real needs, with no generic templates."]) ?></p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('message') ?></div>
        <h3><?= tv(['es' => 'Comunicación cercana', 'en' => 'Close communication']) ?></h3>
        <p><?= tv(['es' => 'Acompañamiento directo durante todo el proyecto, sin intermediarios.', 'en' => 'Direct support throughout the whole project, with no middlemen.']) ?></p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('wrench') ?></div>
        <h3><?= tv(['es' => 'Buenas prácticas', 'en' => 'Best practices']) ?></h3>
        <p><?= tv(['es' => 'Código ordenado y mantenible, usando tecnologías como Laravel y PHP.', 'en' => 'Clean, maintainable code, using technologies like Laravel and PHP.']) ?></p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('shield') ?></div>
        <h3><?= tv(['es' => 'Soporte post-entrega', 'en' => 'Post-launch support']) ?></h3>
        <p><?= tv(['es' => 'El trabajo no termina con la entrega: ofrecemos mantenimiento y mejoras continuas.', 'en' => "The work doesn't end at delivery: we offer ongoing maintenance and improvements."]) ?></p>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
