</main>
<?php
$waLink = 'https://wa.me/573156191056?text=' . rawurlencode(tv([
    'es' => '¡Hola! Quiero más información sobre sus servicios.',
    'en' => 'Hi! I would like more information about your services.',
]));
$waIcon = '<path d="M16.004 3C9.376 3 3.997 8.38 3.997 15.008c0 2.646.868 5.096 2.343 7.077L4.8 28.5l6.57-1.723a12.93 12.93 0 0 0 4.634.855h.005c6.627 0 12.006-5.38 12.006-12.008C28.015 8.996 22.636 3 16.004 3zm7.03 17.005c-.293.826-1.446 1.512-2.37 1.71-.63.132-1.454.238-4.226-.907-3.545-1.468-5.83-5.058-6.008-5.29-.17-.232-1.44-1.916-1.44-3.657 0-1.74.91-2.596 1.234-2.953.293-.324.638-.406.851-.406.213 0 .426.002.612.011.196.01.46-.075.72.548.293.7.994 2.404 1.08 2.579.09.176.15.38.03.612-.116.233-.174.377-.343.58-.17.204-.356.454-.51.61-.17.174-.347.363-.15.712.196.35.874 1.442 1.877 2.336 1.29 1.151 2.377 1.508 2.726 1.68.35.174.552.146.756-.088.204-.233.87-1.014 1.104-1.363.233-.35.466-.29.786-.174.32.116 2.03.957 2.378 1.13.35.174.582.262.668.407.087.146.087.844-.205 1.669z"/>';
?>
<footer class="site-footer">
  <div class="footer-deco" aria-hidden="true"></div>

  <?php if (empty($hideFooterCta)): ?>
  <div class="container">
    <div class="footer-cta">
      <div>
        <h3><?= tv(['es' => '¿Listo para llevar tu negocio a internet?', 'en' => 'Ready to take your business online?']) ?></h3>
        <p><?= tv(['es' => 'Escríbenos y te respondemos con una propuesta a la medida.', 'en' => 'Message us and we will reply with a tailored proposal.']) ?></p>
      </div>
      <div class="footer-cta-actions">
        <a href="<?= e($waLink) ?>" class="btn btn-wa" target="_blank" rel="noopener">
          <svg viewBox="0 0 32 32" width="20" height="20" fill="currentColor" aria-hidden="true"><?= $waIcon ?></svg>
          WhatsApp
        </a>
        <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-ghost"><?= tv(['es' => 'Formulario de contacto', 'en' => 'Contact form']) ?></a>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <div class="container footer-inner">
    <div class="footer-col footer-brand">
      <a href="<?= e(page_url('/')) ?>" class="footer-logo" aria-label="CoderMaster">
        <span class="brk">&lt;</span>Coder<span class="hl">master</span><span class="brk">/&gt;</span>
      </a>
      <p><?= tv([
        'es' => 'Diseño de páginas web y aplicaciones a medida para impulsar tu negocio en Cúcuta, Los Patios y Norte de Santander.',
        'en' => 'Custom website design and web application development to grow your business in Cúcuta, Los Patios and Norte de Santander.',
      ]) ?></p>
      <span class="footer-status"><i aria-hidden="true"></i><?= tv(['es' => 'Disponibles para nuevos proyectos', 'en' => 'Available for new projects']) ?></span>
      <div class="social-links">
        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 8.5V6.8c0-.8.5-1 .9-1h2.3V2.1L14 2c-3.5 0-4.3 2.6-4.3 4.3v2.2H7.6v3.8h2.1V22H14v-9.7h3l.4-3.8H14z"/></svg></a>
        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
        <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9.5h4V21H3zM9.5 9.5h3.8v1.6h.06c.53-1 1.83-2.06 3.77-2.06 4.03 0 4.77 2.65 4.77 6.1V21h-4v-5.1c0-1.22-.02-2.78-1.7-2.78-1.7 0-1.96 1.33-1.96 2.7V21h-4z"/></svg></a>
        <a href="<?= e($waLink) ?>" aria-label="WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"><?= $waIcon ?></svg></a>
      </div>
    </div>

    <div class="footer-col">
      <h4><?= tv(['es' => 'Navegación', 'en' => 'Navigation']) ?></h4>
      <ul class="footer-links">
        <li><a href="<?= e(page_url('/')) ?>"><?= tv(['es' => 'Inicio', 'en' => 'Home']) ?></a></li>
        <li><a href="<?= e(page_url('/servicios')) ?>"><?= tv(['es' => 'Servicios', 'en' => 'Services']) ?></a></li>
        <li><a href="<?= e(page_url('/portafolio')) ?>"><?= tv(['es' => 'Portafolio', 'en' => 'Portfolio']) ?></a></li>
        <li><a href="<?= e(page_url('/precios')) ?>"><?= tv(['es' => 'Precios', 'en' => 'Pricing']) ?></a></li>
        <li><a href="<?= e(page_url('/nosotros')) ?>"><?= tv(['es' => 'Nosotros', 'en' => 'About']) ?></a></li>
        <li><a href="<?= e(page_url('/contacto')) ?>"><?= tv(['es' => 'Contacto', 'en' => 'Contact']) ?></a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4><?= tv(['es' => 'Servicios', 'en' => 'Services']) ?></h4>
      <ul class="footer-links">
        <li><a href="<?= e(page_url('/servicios')) ?>"><?= tv(['es' => 'Páginas web', 'en' => 'Websites']) ?></a></li>
        <li><a href="<?= e(page_url('/servicios')) ?>"><?= tv(['es' => 'Tiendas online', 'en' => 'Online stores']) ?></a></li>
        <li><a href="<?= e(page_url('/servicios')) ?>"><?= tv(['es' => 'Aplicaciones con Laravel', 'en' => 'Laravel applications']) ?></a></li>
        <li><a href="<?= e(page_url('/servicios')) ?>"><?= tv(['es' => 'Sistemas a medida', 'en' => 'Custom systems']) ?></a></li>
        <li><a href="<?= e(page_url('/precios')) ?>"><?= tv(['es' => 'Planes y precios', 'en' => 'Plans and pricing']) ?></a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4><?= tv(['es' => 'Contacto', 'en' => 'Contact']) ?></h4>
      <ul class="footer-contact">
        <li>
          <span class="fc-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></span>
          <a href="mailto:contacto@codermaster.com">contacto@codermaster.com</a>
        </li>
        <li>
          <span class="fc-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2"/></svg></span>
          <a href="tel:+573156191056">+57 315 619 1056</a>
        </li>
        <li>
          <span class="fc-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5a7 7 0 0114 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg></span>
          <span>Cúcuta, Norte de Santander, Colombia</span>
        </li>
      </ul>
    </div>
  </div>

  <div class="container footer-bottom">
    <p>&copy; <?= date('Y') ?> CoderMaster. <?= tv(['es' => 'Todos los derechos reservados.', 'en' => 'All rights reserved.']) ?></p>
    <p class="footer-made"><?= tv(['es' => 'Hecho con', 'en' => 'Made with']) ?> <span class="heart" aria-label="<?= e(tv(['es' => 'amor', 'en' => 'love'])) ?>">♥</span> <?= tv(['es' => 'y mucho código en Cúcuta', 'en' => 'and lots of code in Cúcuta']) ?></p>
    <button type="button" class="to-top" id="toTop" aria-label="<?= e(tv(['es' => 'Volver arriba', 'en' => 'Back to top'])) ?>">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5M6 11l6-6 6 6"/></svg>
    </button>
  </div>

  <div class="footer-watermark" aria-hidden="true">CODERMASTER</div>
</footer>
<a href="<?= e($waLink) ?>"
   class="whatsapp-float"
   target="_blank"
   rel="noopener"
   aria-label="<?= e(tv(['es' => 'Escríbenos por WhatsApp', 'en' => 'Message us on WhatsApp'])) ?>">
  <svg viewBox="0 0 32 32" width="32" height="32" fill="currentColor" aria-hidden="true"><?= $waIcon ?></svg>
</a>
<script src="<?= e(site_url('/assets/js/main.js')) ?>"></script>
</body>
</html>
