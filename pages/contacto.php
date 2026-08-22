<?php
$pageTitle = 'Contacto';
$pageDescription = 'Solicita una cotización de diseño web o desarrollo de aplicaciones en Colombia. Cuéntanos sobre tu proyecto.';
require __DIR__ . '/../includes/header.php';

$status = $_GET['status'] ?? '';
?>

<section class="page-hero">
  <div class="container">
    <h1>Hablemos de tu proyecto</h1>
    <p>Completa el formulario y te contactaremos lo antes posible.</p>
  </div>
</section>

<section class="section">
  <div class="container contact-grid">
    <div class="contact-form-wrap">
      <?php if ($status === 'ok'): ?>
        <div class="alert alert-success">¡Gracias! Tu mensaje fue enviado correctamente.</div>
      <?php elseif ($status === 'error'): ?>
        <div class="alert alert-error">Ocurrió un error al enviar tu mensaje. Revisa los datos e inténtalo de nuevo.</div>
      <?php endif; ?>

      <form action="<?= e(site_url('/contacto-enviar.php')) ?>" method="POST" class="contact-form" novalidate>
        <div class="form-group">
          <label for="nombre">Nombre completo *</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico *</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="tel" id="telefono" name="telefono">
        </div>
        <div class="form-group">
          <label for="mensaje">Cuéntanos sobre tu proyecto *</label>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
      </form>
    </div>

    <aside class="contact-info">
      <h3>Información de contacto</h3>
      <ul>
        <li><strong>Email:</strong><br>contacto@codermaster.com</li>
        <li><strong>Teléfono:</strong><br><a href="tel:+573156191056">+57 315 619 1056</a></li>
        <li><strong>Horario de atención:</strong><br>Lunes a viernes, 9:00 a 18:00</li>
      </ul>
    </aside>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
