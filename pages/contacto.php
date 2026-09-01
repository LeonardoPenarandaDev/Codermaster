<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv(['es' => 'Contacto - Diseño Web en Cúcuta', 'en' => 'Contact - Web Design in Cúcuta']);
$pageDescription = tv([
    'es' => 'Solicita una cotización de diseño web o desarrollo de aplicaciones en Cúcuta, Los Patios y Norte de Santander. Cuéntanos sobre tu proyecto.',
    'en' => 'Request a quote for web design or application development in Cúcuta, Los Patios and Norte de Santander. Tell us about your project.',
]);
require __DIR__ . '/../includes/header.php';

$status = $_GET['status'] ?? '';
?>

<section class="page-hero">
  <div class="container">
    <h1><?= tv(['es' => 'Hablemos de tu proyecto', 'en' => "Let's talk about your project"]) ?></h1>
    <p><?= tv(['es' => 'Completa el formulario y te contactaremos lo antes posible.', 'en' => 'Fill out the form and we will contact you as soon as possible.']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container contact-grid">
    <div class="contact-form-wrap">
      <?php if ($status === 'ok'): ?>
        <div class="alert alert-success"><?= tv(['es' => '¡Gracias! Tu mensaje fue enviado correctamente.', 'en' => 'Thank you! Your message was sent successfully.']) ?></div>
      <?php elseif ($status === 'error'): ?>
        <div class="alert alert-error"><?= tv(['es' => 'Ocurrió un error al enviar tu mensaje. Revisa los datos e inténtalo de nuevo.', 'en' => 'There was an error sending your message. Check the details and try again.']) ?></div>
      <?php endif; ?>

      <form action="<?= e(site_url('/contacto-enviar.php')) ?>" method="POST" class="contact-form" novalidate>
        <input type="hidden" name="lang" value="<?= e(current_lang()) ?>">
        <div class="form-group">
          <label for="nombre"><?= tv(['es' => 'Nombre completo *', 'en' => 'Full name *']) ?></label>
          <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="email"><?= tv(['es' => 'Correo electrónico *', 'en' => 'Email *']) ?></label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="telefono"><?= tv(['es' => 'Teléfono', 'en' => 'Phone']) ?></label>
          <input type="tel" id="telefono" name="telefono">
        </div>
        <div class="form-group">
          <label for="mensaje"><?= tv(['es' => 'Cuéntanos sobre tu proyecto *', 'en' => 'Tell us about your project *']) ?></label>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><?= tv(['es' => 'Enviar mensaje', 'en' => 'Send message']) ?></button>
      </form>
    </div>

    <aside class="contact-info">
      <h3><?= tv(['es' => 'Información de contacto', 'en' => 'Contact information']) ?></h3>
      <ul>
        <li><strong>Email:</strong><br>contacto@codermaster.com</li>
        <li><strong><?= tv(['es' => 'Teléfono:', 'en' => 'Phone:']) ?></strong><br><a href="tel:+573156191056">+57 315 619 1056</a></li>
        <li><strong><?= tv(['es' => 'Horario de atención:', 'en' => 'Business hours:']) ?></strong><br><?= tv(['es' => 'Lunes a viernes, 9:00 a 18:00', 'en' => 'Monday to Friday, 9:00 am to 6:00 pm']) ?></li>
        <li><strong><?= tv(['es' => 'Zona de cobertura:', 'en' => 'Service area:']) ?></strong><br><?= tv(['es' => 'Cúcuta, Los Patios y Norte de Santander', 'en' => 'Cúcuta, Los Patios and Norte de Santander']) ?></li>
      </ul>
    </aside>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
