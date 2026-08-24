</main>
<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-col">
      <a href="<?= e(site_url('/')) ?>" class="logo">Coder<span>Master</span></a>
      <p>Diseño de páginas web y aplicaciones a medida para impulsar tu negocio en Cúcuta, Los Patios y Norte de Santander.</p>
    </div>
    <div class="footer-col">
      <h4>Navegación</h4>
      <ul>
        <li><a href="<?= e(site_url('/')) ?>">Inicio</a></li>
        <li><a href="<?= e(site_url('/servicios')) ?>">Servicios</a></li>
        <li><a href="<?= e(site_url('/portafolio')) ?>">Portafolio</a></li>
        <li><a href="<?= e(site_url('/precios')) ?>">Precios</a></li>
        <li><a href="<?= e(site_url('/nosotros')) ?>">Nosotros</a></li>
        <li><a href="<?= e(site_url('/contacto')) ?>">Contacto</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Contacto</h4>
      <ul class="footer-contact">
        <li>contacto@codermaster.com</li>
        <li><a href="tel:+573156191056">+57 315 619 1056</a></li>
      </ul>
      <div class="social-links">
        <a href="#" aria-label="Facebook">FB</a>
        <a href="#" aria-label="Instagram">IG</a>
        <a href="#" aria-label="LinkedIn">IN</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <?= date('Y') ?> CoderMaster. Todos los derechos reservados.</p>
  </div>
</footer>
<a href="https://wa.me/573156191056?text=<?= rawurlencode('¡Hola! Quiero más información sobre sus servicios.') ?>"
   class="whatsapp-float"
   target="_blank"
   rel="noopener"
   aria-label="Escríbenos por WhatsApp">
  <svg viewBox="0 0 32 32" width="32" height="32" fill="currentColor" aria-hidden="true">
    <path d="M16.004 3C9.376 3 3.997 8.38 3.997 15.008c0 2.646.868 5.096 2.343 7.077L4.8 28.5l6.57-1.723a12.93 12.93 0 0 0 4.634.855h.005c6.627 0 12.006-5.38 12.006-12.008C28.015 8.996 22.636 3 16.004 3zm7.03 17.005c-.293.826-1.446 1.512-2.37 1.71-.63.132-1.454.238-4.226-.907-3.545-1.468-5.83-5.058-6.008-5.29-.17-.232-1.44-1.916-1.44-3.657 0-1.74.91-2.596 1.234-2.953.293-.324.638-.406.851-.406.213 0 .426.002.612.011.196.01.46-.075.72.548.293.7.994 2.404 1.08 2.579.09.176.15.38.03.612-.116.233-.174.377-.343.58-.17.204-.356.454-.51.61-.17.174-.347.363-.15.712.196.35.874 1.442 1.877 2.336 1.29 1.151 2.377 1.508 2.726 1.68.35.174.552.146.756-.088.204-.233.87-1.014 1.104-1.363.233-.35.466-.29.786-.174.32.116 2.03.957 2.378 1.13.35.174.582.262.668.407.087.146.087.844-.205 1.669z"/>
  </svg>
</a>
<script src="<?= e(site_url('/assets/js/main.js')) ?>"></script>
</body>
</html>
