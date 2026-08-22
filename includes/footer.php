</main>
<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-col">
      <a href="<?= e(site_url('/')) ?>" class="logo">Coder<span>Master</span></a>
      <p>Diseño de páginas web y aplicaciones a medida para impulsar tu negocio.</p>
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
<script src="<?= e(site_url('/assets/js/main.js')) ?>"></script>
</body>
</html>
