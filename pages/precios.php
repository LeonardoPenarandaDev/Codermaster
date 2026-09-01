<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv(['es' => 'Precios de Páginas Web en Cúcuta', 'en' => 'Website Pricing in Cúcuta']);
$pageDescription = tv([
    'es' => 'Planes en pesos colombianos para páginas web y aplicaciones a medida. Cotiza tu proyecto con CoderMaster en Cúcuta, Los Patios y Norte de Santander.',
    'en' => 'Plans in Colombian pesos for websites and custom applications. Get a quote for your project with CoderMaster in Cúcuta, Los Patios and Norte de Santander.',
]);
require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1><?= tv(['es' => 'Planes y Precios', 'en' => 'Plans and Pricing']) ?></h1>
    <p><?= tv(['es' => 'Precios de referencia en pesos colombianos — cada proyecto se cotiza según sus necesidades específicas.', 'en' => 'Reference prices in Colombian pesos — every project is quoted according to its specific needs.']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container pricing-grid">
    <div class="price-card">
      <h3><?= tv(['es' => 'Básico', 'en' => 'Basic']) ?></h3>
      <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Ideal para presencia digital simple.', 'en' => 'Ideal for a simple digital presence.']) ?></p>
      <div class="price"><?= tv(['es' => 'Desde $750.000', 'en' => 'From $750,000']) ?> <span>COP</span></div>
      <ul>
        <li><?= tv(['es' => 'Landing page o sitio de hasta 3 secciones', 'en' => 'Landing page or site with up to 3 sections']) ?></li>
        <li><?= tv(['es' => 'Diseño responsive a medida', 'en' => 'Custom responsive design']) ?></li>
        <li><?= tv(['es' => 'Formulario de contacto', 'en' => 'Contact form']) ?></li>
        <li><?= tv(['es' => '1 ronda de ajustes', 'en' => '1 round of revisions']) ?></li>
      </ul>
      <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline"><?= tv(['es' => 'Cotizar este plan', 'en' => 'Get this plan']) ?></a>
    </div>

    <div class="price-card featured">
      <span class="badge"><?= tv(['es' => 'Más elegido', 'en' => 'Most popular']) ?></span>
      <h3><?= tv(['es' => 'Profesional', 'en' => 'Professional']) ?></h3>
      <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Para negocios que necesitan un sitio completo o una app a medida.', 'en' => 'For businesses that need a full site or a custom app.']) ?></p>
      <div class="price"><?= tv(['es' => 'Desde $1.800.000', 'en' => 'From $1,800,000']) ?> <span>COP</span></div>
      <ul>
        <li><?= tv(['es' => 'Sitio web multi-página o app básica con Laravel', 'en' => 'Multi-page website or basic Laravel app']) ?></li>
        <li><?= tv(['es' => 'Panel de administración simple', 'en' => 'Simple admin panel']) ?></li>
        <li><?= tv(['es' => 'Formulario con envío de correo', 'en' => 'Form with email delivery']) ?></li>
        <li><?= tv(['es' => 'Optimización SEO básica', 'en' => 'Basic SEO optimization']) ?></li>
        <li><?= tv(['es' => '2 rondas de ajustes', 'en' => '2 rounds of revisions']) ?></li>
      </ul>
      <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-primary"><?= tv(['es' => 'Cotizar este plan', 'en' => 'Get this plan']) ?></a>
    </div>

    <div class="price-card">
      <h3><?= tv(['es' => 'Empresarial', 'en' => 'Enterprise']) ?></h3>
      <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Aplicaciones a medida con funcionalidades avanzadas.', 'en' => 'Custom applications with advanced functionality.']) ?></p>
      <div class="price"><?= tv(['es' => 'Cotización', 'en' => 'Custom']) ?> <span><?= tv(['es' => 'personalizada', 'en' => 'quote']) ?></span></div>
      <ul>
        <li><?= tv(['es' => 'Sistema a medida con Laravel (inventario, citas, e-commerce, etc.)', 'en' => 'Custom Laravel system (inventory, bookings, e-commerce, etc.)']) ?></li>
        <li><?= tv(['es' => 'Roles y permisos de usuario', 'en' => 'User roles and permissions']) ?></li>
        <li><?= tv(['es' => 'Integraciones con terceros (pagos, correo, APIs)', 'en' => 'Third-party integrations (payments, email, APIs)']) ?></li>
        <li><?= tv(['es' => 'Soporte y mantenimiento continuo', 'en' => 'Ongoing support and maintenance']) ?></li>
      </ul>
      <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline"><?= tv(['es' => 'Solicitar cotización', 'en' => 'Request a quote']) ?></a>
    </div>
  </div>

  <p class="text-center" style="color:var(--color-muted); margin-top:24px;">
    <?= tv(['es' => 'Los precios no incluyen hosting ni dominio. Estos servicios se cotizan por separado según el proveedor y las necesidades del proyecto.', 'en' => 'Prices do not include hosting or domain. These services are quoted separately depending on the provider and project needs.']) ?>
  </p>

  <p class="text-center" style="color:var(--color-muted); margin-top:32px;">
    <?= tv(['es' => '¿Tu proyecto no encaja en estos planes?', 'en' => "Doesn't your project fit these plans?"]) ?> <a href="<?= e(page_url('/contacto')) ?>" style="color:var(--color-primary); font-weight:600;"><?= tv(['es' => 'Escríbenos', 'en' => 'Contact us']) ?></a> <?= tv(['es' => 'y armamos una propuesta a tu medida.', 'en' => 'and we will put together a custom proposal.']) ?>
  </p>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Tienda online', 'en' => 'Online store']) ?></span>
      <h2><?= tv(['es' => 'Planes de E-commerce', 'en' => 'E-commerce Plans']) ?></h2>
      <p><?= tv(['es' => 'Precios de referencia para crear tu tienda en línea, desde un catálogo simple hasta una plataforma con pagos y varios vendedores.', 'en' => 'Reference prices to build your online store, from a simple catalog to a platform with payments and multiple sellers.']) ?></p>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <h3><?= tv(['es' => 'E-commerce Básico', 'en' => 'E-commerce Basic']) ?></h3>
        <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Catálogo en línea con pedidos por WhatsApp.', 'en' => 'Online catalog with orders through WhatsApp.']) ?></p>
        <div class="price"><?= tv(['es' => 'Desde $1.500.000', 'en' => 'From $1,500,000']) ?> <span>COP</span></div>
        <ul>
          <li><?= tv(['es' => 'Catálogo de productos ilimitado', 'en' => 'Unlimited product catalog']) ?></li>
          <li><?= tv(['es' => 'Carrito y checkout por WhatsApp', 'en' => 'Cart and checkout via WhatsApp']) ?></li>
          <li><?= tv(['es' => 'Diseño responsive a medida', 'en' => 'Custom responsive design']) ?></li>
          <li><?= tv(['es' => '1 ronda de ajustes', 'en' => '1 round of revisions']) ?></li>
          <li><?= tv(['es' => 'Tiempo estimado: 1-2 semanas', 'en' => 'Estimated time: 1-2 weeks']) ?></li>
        </ul>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline"><?= tv(['es' => 'Cotizar este plan', 'en' => 'Get this plan']) ?></a>
      </div>

      <div class="price-card featured">
        <span class="badge"><?= tv(['es' => 'Más elegido', 'en' => 'Most popular']) ?></span>
        <h3><?= tv(['es' => 'E-commerce Estándar', 'en' => 'E-commerce Standard']) ?></h3>
        <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Tienda completa con pagos en línea.', 'en' => 'Full store with online payments.']) ?></p>
        <div class="price"><?= tv(['es' => 'Desde $2.500.000', 'en' => 'From $2,500,000']) ?> <span>COP</span></div>
        <ul>
          <li><?= tv(['es' => 'Todo lo del plan Básico', 'en' => 'Everything in the Basic plan']) ?></li>
          <li><?= tv(['es' => 'Pasarela de pagos (Wompi, PayU o Mercado Pago)', 'en' => 'Payment gateway (Wompi, PayU or Mercado Pago)']) ?></li>
          <li><?= tv(['es' => 'Panel de administración de pedidos e inventario', 'en' => 'Order and inventory admin panel']) ?></li>
          <li><?= tv(['es' => '2 rondas de ajustes', 'en' => '2 rounds of revisions']) ?></li>
          <li><?= tv(['es' => 'Tiempo estimado: 3-5 semanas', 'en' => 'Estimated time: 3-5 weeks']) ?></li>
        </ul>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-primary"><?= tv(['es' => 'Cotizar este plan', 'en' => 'Get this plan']) ?></a>
      </div>

      <div class="price-card">
        <h3><?= tv(['es' => 'E-commerce Avanzado', 'en' => 'E-commerce Advanced']) ?></h3>
        <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Plataformas con múltiples vendedores o integraciones.', 'en' => 'Platforms with multiple sellers or integrations.']) ?></p>
        <div class="price"><?= tv(['es' => 'Cotización', 'en' => 'Custom']) ?> <span><?= tv(['es' => 'personalizada', 'en' => 'quote']) ?></span></div>
        <ul>
          <li><?= tv(['es' => 'Todo lo del plan Estándar', 'en' => 'Everything in the Standard plan']) ?></li>
          <li><?= tv(['es' => 'Multi-vendedor', 'en' => 'Multi-vendor']) ?></li>
          <li><?= tv(['es' => 'Facturación electrónica (DIAN), envíos y cupones', 'en' => 'Electronic invoicing (DIAN), shipping and coupons']) ?></li>
          <li><?= tv(['es' => 'Soporte prioritario', 'en' => 'Priority support']) ?></li>
          <li><?= tv(['es' => 'Tiempo estimado: 2-4 meses', 'en' => 'Estimated time: 2-4 months']) ?></li>
        </ul>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline"><?= tv(['es' => 'Solicitar cotización', 'en' => 'Request a quote']) ?></a>
      </div>
    </div>
    <p class="text-center" style="color:var(--color-muted); margin-top:8px; font-size:0.85rem;">
      <?= tv(['es' => 'Los tiempos son estimados y pueden variar según la cantidad de productos, el nivel de personalización del diseño y la disponibilidad de contenido (fotos, textos) por parte del cliente.', 'en' => 'Timelines are estimates and may vary depending on the number of products, the level of design customization, and the availability of content (photos, text) from the client.']) ?>
    </p>
    <p class="text-center" style="color:var(--color-muted); margin-top:24px;">
      <?= tv(['es' => 'También disponible en modalidad mensual desde $180.000 COP, con hosting, copias de seguridad y soporte incluido.', 'en' => 'Also available on a monthly plan from $180,000 COP, including hosting, backups and support.']) ?>
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Instituciones educativas', 'en' => 'Educational institutions']) ?></span>
      <h2><?= tv(['es' => 'Planes de Administración de Colegios', 'en' => 'School Management Plans']) ?></h2>
      <p><?= tv(['es' => 'Plataforma para matrículas, calificaciones, asistencia y comunicación con acudientes. Planes anuales según el número de estudiantes de tu institución.', 'en' => 'Platform for enrollment, grades, attendance and communication with parents. Annual plans based on the number of students at your institution.']) ?></p>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <h3><?= tv(['es' => 'Colegios Básico', 'en' => 'Schools Basic']) ?></h3>
        <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Para instituciones pequeñas que están iniciando su transformación digital.', 'en' => 'For small institutions starting their digital transformation.']) ?></p>
        <div class="price"><?= tv(['es' => 'Desde $950.000', 'en' => 'From $950,000']) ?> <span><?= tv(['es' => 'COP / año', 'en' => 'COP / year']) ?></span></div>
        <ul>
          <li><?= tv(['es' => 'Hasta 200 estudiantes', 'en' => 'Up to 200 students']) ?></li>
          <li><?= tv(['es' => 'Matrículas y calificaciones en línea', 'en' => 'Online enrollment and grades']) ?></li>
          <li><?= tv(['es' => 'Control de asistencia', 'en' => 'Attendance tracking']) ?></li>
          <li><?= tv(['es' => 'Portal para acudientes', 'en' => 'Parent portal']) ?></li>
          <li><?= tv(['es' => 'Soporte incluido', 'en' => 'Support included']) ?></li>
          <li><?= tv(['es' => 'Tiempo estimado: 3-4 semanas', 'en' => 'Estimated time: 3-4 weeks']) ?></li>
        </ul>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline"><?= tv(['es' => 'Cotizar este plan', 'en' => 'Get this plan']) ?></a>
      </div>

      <div class="price-card featured">
        <span class="badge"><?= tv(['es' => 'Más elegido', 'en' => 'Most popular']) ?></span>
        <h3><?= tv(['es' => 'Colegios Estándar', 'en' => 'Schools Standard']) ?></h3>
        <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Para colegios en crecimiento que necesitan gestión académica y financiera completa.', 'en' => 'For growing schools that need full academic and financial management.']) ?></p>
        <div class="price"><?= tv(['es' => 'Desde $1.700.000', 'en' => 'From $1,700,000']) ?> <span><?= tv(['es' => 'COP / año', 'en' => 'COP / year']) ?></span></div>
        <ul>
          <li><?= tv(['es' => 'Hasta 600 estudiantes', 'en' => 'Up to 600 students']) ?></li>
          <li><?= tv(['es' => 'Todo lo del plan Básico', 'en' => 'Everything in the Basic plan']) ?></li>
          <li><?= tv(['es' => 'Gestión de pagos y mensualidades', 'en' => 'Payment and tuition management']) ?></li>
          <li><?= tv(['es' => 'Comunicados y notificaciones a acudientes', 'en' => 'Announcements and notifications to parents']) ?></li>
          <li><?= tv(['es' => 'Reportes de rendimiento académico', 'en' => 'Academic performance reports']) ?></li>
          <li><?= tv(['es' => 'Tiempo estimado: 5-7 semanas', 'en' => 'Estimated time: 5-7 weeks']) ?></li>
        </ul>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-primary"><?= tv(['es' => 'Cotizar este plan', 'en' => 'Get this plan']) ?></a>
      </div>

      <div class="price-card">
        <h3><?= tv(['es' => 'Colegios Premium', 'en' => 'Schools Premium']) ?></h3>
        <p style="color:var(--color-muted); font-size:0.9rem;"><?= tv(['es' => 'Para instituciones grandes o con varias sedes.', 'en' => 'For large institutions or those with multiple campuses.']) ?></p>
        <div class="price"><?= tv(['es' => 'Cotización', 'en' => 'Custom']) ?> <span><?= tv(['es' => 'personalizada', 'en' => 'quote']) ?></span></div>
        <ul>
          <li><?= tv(['es' => 'Más de 600 estudiantes', 'en' => 'More than 600 students']) ?></li>
          <li><?= tv(['es' => 'Todo lo del plan Estándar', 'en' => 'Everything in the Standard plan']) ?></li>
          <li><?= tv(['es' => 'Gestión multi-sede', 'en' => 'Multi-campus management']) ?></li>
          <li><?= tv(['es' => 'Roles y permisos para docentes y coordinadores', 'en' => 'Roles and permissions for teachers and coordinators']) ?></li>
          <li><?= tv(['es' => 'Integraciones con pasarela de pagos y facturación electrónica', 'en' => 'Integrations with payment gateway and electronic invoicing']) ?></li>
          <li><?= tv(['es' => 'Soporte prioritario', 'en' => 'Priority support']) ?></li>
        </ul>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-outline"><?= tv(['es' => 'Solicitar cotización', 'en' => 'Request a quote']) ?></a>
      </div>
    </div>
    <p class="text-center" style="color:var(--color-muted); margin-top:8px; font-size:0.85rem;">
      <?= tv(['es' => 'Los rangos de estudiantes son de referencia; si tu institución está entre dos planes, ajustamos el precio proporcionalmente.', 'en' => 'Student ranges are for reference; if your institution falls between two plans, we adjust the price proportionally.']) ?>
    </p>
    <p class="text-center" style="color:var(--color-muted); margin-top:24px;">
      <?= tv(['es' => 'También disponible en modalidad mensual desde $150.000 COP, con soporte incluido. El hosting se cotiza aparte según el proveedor.', 'en' => 'Also available on a monthly plan from $150,000 COP, with support included. Hosting is quoted separately depending on the provider.']) ?>
    </p>
  </div>
</section>

<section class="section" style="background:var(--color-bg);">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Ejemplos reales', 'en' => 'Real examples']) ?></span>
      <h2><?= tv(['es' => '¿Cuánto cuesta un sistema como los de nuestro portafolio?', 'en' => 'How much does a system like the ones in our portfolio cost?']) ?></h2>
      <p><?= tv(['es' => 'Precios de referencia para sistemas a medida similares a los que hemos desarrollado. Puedes pagarlo completo una sola vez, o en modalidad mensual con hosting en nuestros servidores y soporte técnico incluido, sin una inversión inicial grande.', 'en' => 'Reference prices for custom systems similar to the ones we have developed. You can pay it in full once, or on a monthly plan with hosting on our servers and technical support included, without a large upfront investment.']) ?></p>
    </div>
    <div class="grid-cards">
      <div class="card">
        <div class="icon"><?= icon('graduation') ?></div>
        <h3><?= tv(['es' => 'Gestión escolar', 'en' => 'School management']) ?></h3>
        <p><?= tv(['es' => 'Matrículas, calificaciones, asistencia y comunicación con acudientes.', 'en' => 'Enrollment, grades, attendance and communication with parents.']) ?></p>
        <div class="price-tag"><?= tv(['es' => 'Desde $3.500.000', 'en' => 'From $3,500,000']) ?> <span>COP</span></div>
        <div class="price-alt"><?= tv(['es' => 'o $1.000.000', 'en' => 'or $1,000,000']) ?><span>/<?= tv(['es' => 'año', 'en' => 'year']) ?></span> <?= tv(['es' => 'con hosting y soporte en nuestro servidor', 'en' => 'with hosting and support on our server']) ?></div>
      </div>
      <div class="card">
        <div class="icon"><?= icon('card') ?></div>
        <h3><?= tv(['es' => 'Pagos de mensualidades', 'en' => 'Tuition payments']) ?></h3>
        <p><?= tv(['es' => 'Estados de cuenta, control de mora y recordatorios de pago.', 'en' => 'Account statements, overdue tracking and payment reminders.']) ?></p>
        <div class="price-tag"><?= tv(['es' => 'Desde $2.500.000', 'en' => 'From $2,500,000']) ?> <span>COP</span></div>
        <div class="price-alt"><?= tv(['es' => 'o desde $180.000', 'en' => 'or from $180,000']) ?><span>/<?= tv(['es' => 'mes', 'en' => 'month']) ?></span> <?= tv(['es' => 'con hosting y soporte', 'en' => 'with hosting and support']) ?></div>
      </div>
      <div class="card">
        <div class="icon"><?= icon('parking') ?></div>
        <h3><?= tv(['es' => 'Parqueaderos', 'en' => 'Parking lots']) ?></h3>
        <p><?= tv(['es' => 'Entradas, salidas, tarifas por tiempo y mensualidades.', 'en' => 'Entries, exits, time-based rates and monthly passes.']) ?></p>
        <div class="price-tag"><?= tv(['es' => 'Desde $2.800.000', 'en' => 'From $2,800,000']) ?> <span>COP</span></div>
        <div class="price-alt"><?= tv(['es' => 'o desde $200.000', 'en' => 'or from $200,000']) ?><span>/<?= tv(['es' => 'mes', 'en' => 'month']) ?></span> <?= tv(['es' => 'con hosting y soporte', 'en' => 'with hosting and support']) ?></div>
      </div>
      <div class="card">
        <div class="icon"><?= icon('building') ?></div>
        <h3><?= tv(['es' => 'Conjuntos residenciales', 'en' => 'Residential complexes']) ?></h3>
        <p><?= tv(['es' => 'Cuotas de administración, PQRs y reserva de zonas comunes.', 'en' => 'HOA fees, resident requests and common area bookings.']) ?></p>
        <div class="price-tag"><?= tv(['es' => 'Desde $3.500.000', 'en' => 'From $3,500,000']) ?> <span>COP</span></div>
        <div class="price-alt"><?= tv(['es' => 'o desde $250.000', 'en' => 'or from $250,000']) ?><span>/<?= tv(['es' => 'mes', 'en' => 'month']) ?></span> <?= tv(['es' => 'con hosting y soporte', 'en' => 'with hosting and support']) ?></div>
      </div>
      <div class="card">
        <div class="icon"><?= icon('cart') ?></div>
        <h3><?= tv(['es' => 'Tienda online / E-commerce', 'en' => 'Online store / E-commerce']) ?></h3>
        <p><?= tv(['es' => 'Catálogo, carrito de compras, pagos en línea y panel de pedidos.', 'en' => 'Catalog, shopping cart, online payments and order panel.']) ?></p>
        <div class="price-tag"><?= tv(['es' => 'Desde $2.200.000', 'en' => 'From $2,200,000']) ?> <span>COP</span></div>
        <div class="price-alt"><?= tv(['es' => 'o desde $150.000', 'en' => 'or from $150,000']) ?><span>/<?= tv(['es' => 'mes', 'en' => 'month']) ?></span> <?= tv(['es' => 'con hosting y soporte', 'en' => 'with hosting and support']) ?></div>
      </div>
    </div>
    <p class="text-center" style="color:var(--color-muted); margin-top:24px; font-size:0.9rem;">
      <?= tv(['es' => 'La modalidad mensual incluye hosting en nuestros servidores, copias de seguridad y soporte técnico continuo — ideal si prefieres no hacer un pago inicial grande. Requiere permanencia mínima, sujeta a acuerdo.', 'en' => 'The monthly plan includes hosting on our servers, backups and ongoing technical support — ideal if you prefer not to make a large upfront payment. Requires a minimum commitment period, subject to agreement.']) ?>
    </p>
    <p class="text-center mt-32">
      <a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-outline"><?= tv(['es' => 'Ver estos proyectos en el portafolio', 'en' => 'View these projects in the portfolio']) ?></a>
    </p>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
