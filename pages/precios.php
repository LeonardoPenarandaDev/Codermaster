<?php
$pageTitle = 'Precios';
$pageDescription = 'Planes en pesos colombianos para páginas web y aplicaciones a medida. Cotiza tu proyecto con CoderMaster en Colombia.';
require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1>Planes y Precios</h1>
    <p>Precios de referencia en pesos colombianos — cada proyecto se cotiza según sus necesidades específicas.</p>
  </div>
</section>

<section class="section">
  <div class="container pricing-grid">
    <div class="price-card">
      <h3>Básico</h3>
      <p style="color:var(--color-muted); font-size:0.9rem;">Ideal para presencia digital simple.</p>
      <div class="price">Desde $750.000 <span>COP</span></div>
      <ul>
        <li>Landing page o sitio de hasta 3 secciones</li>
        <li>Diseño responsive a medida</li>
        <li>Formulario de contacto</li>
        <li>1 ronda de ajustes</li>
      </ul>
      <a href="<?= e(site_url('/contacto')) ?>" class="btn btn-outline">Cotizar este plan</a>
    </div>

    <div class="price-card featured">
      <span class="badge">Más elegido</span>
      <h3>Profesional</h3>
      <p style="color:var(--color-muted); font-size:0.9rem;">Para negocios que necesitan un sitio completo o una app a medida.</p>
      <div class="price">Desde $1.800.000 <span>COP</span></div>
      <ul>
        <li>Sitio web multi-página o app básica con Laravel</li>
        <li>Panel de administración simple</li>
        <li>Formulario con envío de correo</li>
        <li>Optimización SEO básica</li>
        <li>2 rondas de ajustes</li>
      </ul>
      <a href="<?= e(site_url('/contacto')) ?>" class="btn btn-primary">Cotizar este plan</a>
    </div>

    <div class="price-card">
      <h3>Empresarial</h3>
      <p style="color:var(--color-muted); font-size:0.9rem;">Aplicaciones a medida con funcionalidades avanzadas.</p>
      <div class="price">Cotización <span>personalizada</span></div>
      <ul>
        <li>Sistema a medida con Laravel (inventario, citas, e-commerce, etc.)</li>
        <li>Roles y permisos de usuario</li>
        <li>Integraciones con terceros (pagos, correo, APIs)</li>
        <li>Soporte y mantenimiento continuo</li>
      </ul>
      <a href="<?= e(site_url('/contacto')) ?>" class="btn btn-outline">Solicitar cotización</a>
    </div>
  </div>

  <p class="text-center" style="color:var(--color-muted); margin-top:24px;">
    Los precios no incluyen hosting ni dominio. Estos servicios se cotizan por separado según el proveedor y las necesidades del proyecto.
  </p>

  <p class="text-center" style="color:var(--color-muted); margin-top:32px;">
    ¿Tu proyecto no encaja en estos planes? <a href="<?= e(site_url('/contacto')) ?>" style="color:var(--color-primary); font-weight:600;">Escríbenos</a> y armamos una propuesta a tu medida.
  </p>
</section>

<section class="section" style="background:var(--color-bg);">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Ejemplos reales</span>
      <h2>¿Cuánto cuesta un sistema como los de nuestro portafolio?</h2>
      <p>Precios de referencia para sistemas a medida similares a los que hemos desarrollado. Puedes pagarlo completo una sola vez, o en modalidad mensual con hosting en nuestros servidores y soporte técnico incluido, sin una inversión inicial grande.</p>
    </div>
    <div class="grid-cards">
      <div class="card">
        <div class="icon">🎓</div>
        <h3>Gestión escolar</h3>
        <p>Matrículas, calificaciones, asistencia y comunicación con acudientes.</p>
        <div class="price-tag">Desde $3.500.000 <span>COP</span></div>
        <div class="price-alt">o $1.000.000<span>/año</span> con hosting y soporte en nuestro servidor</div>
      </div>
      <div class="card">
        <div class="icon">💳</div>
        <h3>Pagos de mensualidades</h3>
        <p>Estados de cuenta, control de mora y recordatorios de pago.</p>
        <div class="price-tag">Desde $2.500.000 <span>COP</span></div>
        <div class="price-alt">o desde $180.000<span>/mes</span> con hosting y soporte</div>
      </div>
      <div class="card">
        <div class="icon">🅿️</div>
        <h3>Parqueaderos</h3>
        <p>Entradas, salidas, tarifas por tiempo y mensualidades.</p>
        <div class="price-tag">Desde $2.800.000 <span>COP</span></div>
        <div class="price-alt">o desde $200.000<span>/mes</span> con hosting y soporte</div>
      </div>
      <div class="card">
        <div class="icon">🏢</div>
        <h3>Conjuntos residenciales</h3>
        <p>Cuotas de administración, PQRs y reserva de zonas comunes.</p>
        <div class="price-tag">Desde $3.500.000 <span>COP</span></div>
        <div class="price-alt">o desde $250.000<span>/mes</span> con hosting y soporte</div>
      </div>
      <div class="card">
        <div class="icon">🛒</div>
        <h3>Tienda online / E-commerce</h3>
        <p>Catálogo, carrito de compras, pagos en línea y panel de pedidos.</p>
        <div class="price-tag">Desde $2.200.000 <span>COP</span></div>
        <div class="price-alt">o desde $150.000<span>/mes</span> con hosting y soporte</div>
      </div>
    </div>
    <p class="text-center" style="color:var(--color-muted); margin-top:24px; font-size:0.9rem;">
      La modalidad mensual incluye hosting en nuestros servidores, copias de seguridad y soporte técnico continuo — ideal si prefieres no hacer un pago inicial grande. Requiere permanencia mínima, sujeta a acuerdo.
    </p>
    <p class="text-center mt-32">
      <a href="<?= e(site_url('/portafolio')) ?>" class="btn btn-outline">Ver estos proyectos en el portafolio</a>
    </p>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
