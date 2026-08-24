<?php
$pageTitle = 'Sobre Nosotros';
$pageDescription = 'Conoce a CoderMaster, especialistas en diseño web y desarrollo de aplicaciones a medida para negocios en Cúcuta, Los Patios y Norte de Santander.';
require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1>Sobre CoderMaster</h1>
    <p>Diseñamos y desarrollamos soluciones digitales a la medida de cada negocio.</p>
  </div>
</section>

<section class="section">
  <div class="container about-grid">
    <div>
      <span class="eyebrow">Quiénes somos</span>
      <h2 style="margin: 12px 0 16px;">Un emprendimiento enfocado en resultados reales</h2>
      <p style="color:var(--color-muted); margin-bottom: 16px;">
        CoderMaster nace con el objetivo de acercar soluciones de desarrollo web y de software a medida a negocios
        que buscan crecer en digital. Trabajamos de la mano de cada cliente para entender su proceso y entregar
        una página web o aplicación que realmente resuelva su problema.
      </p>
      <p style="color:var(--color-muted);">
        Además de páginas web, desarrollamos aplicaciones a medida con Laravel: sistemas de inventario, gestión de
        citas, paneles administrativos y tiendas online, aplicando buenas prácticas de desarrollo y seguridad.
      </p>
    </div>
    <div class="hero-card" style="background:var(--color-bg); border-color:var(--color-border);">
      <ul>
        <li><span class="dot"></span><div style="color:var(--color-text);"><strong style="color:var(--color-dark);">Misión</strong>Ayudar a negocios y emprendedores a tener presencia digital y herramientas a medida para crecer.</div></li>
        <li><span class="dot"></span><div style="color:var(--color-text);"><strong style="color:var(--color-dark);">Visión</strong>Ser el aliado de referencia en desarrollo web y de aplicaciones para pequeños y medianos negocios.</div></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="section-head" style="margin-top:64px;">
      <span class="eyebrow">Por qué elegirnos</span>
      <h2>Lo que nos diferencia</h2>
    </div>
    <div class="values-grid">
      <div class="card">
        <div class="icon"><?= icon('target') ?></div>
        <h3>Soluciones a medida</h3>
        <p>Cada proyecto se diseña según las necesidades reales del cliente, sin plantillas genéricas.</p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('message') ?></div>
        <h3>Comunicación cercana</h3>
        <p>Acompañamiento directo durante todo el proyecto, sin intermediarios.</p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('wrench') ?></div>
        <h3>Buenas prácticas</h3>
        <p>Código ordenado y mantenible, usando tecnologías como Laravel y PHP.</p>
      </div>
      <div class="card">
        <div class="icon"><?= icon('shield') ?></div>
        <h3>Soporte post-entrega</h3>
        <p>El trabajo no termina con la entrega: ofrecemos mantenimiento y mejoras continuas.</p>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
