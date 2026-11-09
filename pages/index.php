<?php
require_once __DIR__ . '/../includes/lang.php';
$pageTitle = tv([
    'es' => 'Diseño Web en Cúcuta, Los Patios y Norte de Santander',
    'en' => 'Web Design in Cúcuta, Los Patios and Norte de Santander',
]);
$pageDescription = tv([
    'es' => 'Diseño y desarrollo de páginas web y aplicaciones con Laravel en Cúcuta, Los Patios y Norte de Santander. CoderMaster crea soluciones digitales a medida para tu negocio.',
    'en' => 'Website design and Laravel application development in Cúcuta, Los Patios and Norte de Santander. CoderMaster builds custom digital solutions for your business.',
]);
$hideFooterCta = true;
require __DIR__ . '/../includes/header.php';

$proyectos = require __DIR__ . '/../data/proyectos.php';
$destacados = array_slice(array_filter($proyectos, fn($p) => $p['destacado']), 0, 3);
$clientes = require __DIR__ . '/../data/clientes.php';

// Textos y opciones para las secciones interactivas (los usa assets/js/main.js)
$cmHome = [
    'whatsapp' => '573156191056',
    'rotator'  => tv([
        'es' => ['páginas web', 'tiendas online', 'aplicaciones', 'sistemas a medida'],
        'en' => ['websites', 'online stores', 'applications', 'custom systems'],
    ]),
    'builder' => [
        'title'    => tv(['es' => 'Tu negocio, en línea', 'en' => 'Your business, online']),
        'subtitle' => tv(['es' => 'Atiende clientes 24/7', 'en' => 'Serve customers 24/7']),
        'button'   => tv(['es' => 'Cotizar ahora', 'en' => 'Get a quote']),
        'section'  => tv(['es' => 'servicios', 'en' => 'services']),
        'done'     => tv(['es' => '¡Sitio publicado!', 'en' => 'Site published!']),
    ],
    'types' => [
        'restaurante' => [
            'label' => tv(['es' => 'Restaurante', 'en' => 'Restaurant']),
            'emoji' => '🍽️',
            'name'  => tv(['es' => 'Sabor Cucuteño', 'en' => 'Local Flavors']),
            'title' => tv(['es' => 'Sabores que enamoran', 'en' => 'Flavors you will love']),
            'sub'   => tv(['es' => 'Reserva tu mesa o pide a domicilio en segundos.', 'en' => 'Book a table or order delivery in seconds.']),
            'cta'   => tv(['es' => 'Reservar mesa', 'en' => 'Book a table']),
            'feats' => tv(['es' => ['Menú digital', 'Reservas online', 'Domicilios'], 'en' => ['Digital menu', 'Online bookings', 'Delivery']]),
            'icons' => ['📋', '📅', '🛵'],
        ],
        'tienda' => [
            'label' => tv(['es' => 'Tienda', 'en' => 'Store']),
            'emoji' => '🛍️',
            'name'  => tv(['es' => 'Mi Tienda', 'en' => 'My Store']),
            'title' => tv(['es' => 'Tu tienda abierta 24/7', 'en' => 'Your store, open 24/7']),
            'sub'   => tv(['es' => 'Vende en todo el país con pagos seguros y envíos.', 'en' => 'Sell nationwide with secure payments and shipping.']),
            'cta'   => tv(['es' => 'Comprar ahora', 'en' => 'Shop now']),
            'feats' => tv(['es' => ['Catálogo', 'Pagos seguros', 'Envíos'], 'en' => ['Catalog', 'Secure payments', 'Shipping']]),
            'icons' => ['🏷️', '💳', '📦'],
        ],
        'salud' => [
            'label' => tv(['es' => 'Salud', 'en' => 'Health']),
            'emoji' => '🩺',
            'name'  => tv(['es' => 'Clínica Vital', 'en' => 'Vital Clinic']),
            'title' => tv(['es' => 'Tu salud en buenas manos', 'en' => 'Your health in good hands']),
            'sub'   => tv(['es' => 'Agenda tu cita con especialistas sin hacer filas.', 'en' => 'Book with specialists without waiting in line.']),
            'cta'   => tv(['es' => 'Agendar cita', 'en' => 'Book appointment']),
            'feats' => tv(['es' => ['Citas online', 'Especialistas', 'Resultados'], 'en' => ['Online booking', 'Specialists', 'Results']]),
            'icons' => ['📅', '👩‍⚕️', '📄'],
        ],
        'educacion' => [
            'label' => tv(['es' => 'Educación', 'en' => 'Education']),
            'emoji' => '🎓',
            'name'  => tv(['es' => 'Colegio Futuro', 'en' => 'Future School']),
            'title' => tv(['es' => 'Aprender nunca fue tan fácil', 'en' => 'Learning made easy']),
            'sub'   => tv(['es' => 'Matrículas, notas y pagos en una sola plataforma.', 'en' => 'Enrollment, grades and payments in one platform.']),
            'cta'   => tv(['es' => 'Matricúlate', 'en' => 'Enroll now']),
            'feats' => tv(['es' => ['Matrículas', 'Notas en línea', 'Pagos'], 'en' => ['Enrollment', 'Online grades', 'Payments']]),
            'icons' => ['📝', '📊', '💰'],
        ],
        'servicios' => [
            'label' => tv(['es' => 'Servicios', 'en' => 'Services']),
            'emoji' => '💼',
            'name'  => tv(['es' => 'Pro Consultores', 'en' => 'Pro Consulting']),
            'title' => tv(['es' => 'Soluciones que dan resultados', 'en' => 'Solutions that deliver']),
            'sub'   => tv(['es' => 'Muestra tu experiencia y recibe clientes cada semana.', 'en' => 'Show your expertise and get new clients every week.']),
            'cta'   => tv(['es' => 'Cotizar', 'en' => 'Get a quote']),
            'feats' => tv(['es' => ['Servicios', 'Portafolio', 'Contacto directo'], 'en' => ['Services', 'Portfolio', 'Direct contact']]),
            'icons' => ['⚙️', '🖼️', '💬'],
        ],
    ],
    'styles' => [
        'moderno'  => tv(['es' => 'Moderno', 'en' => 'Modern']),
        'elegante' => tv(['es' => 'Elegante', 'en' => 'Elegant']),
        'audaz'    => tv(['es' => 'Audaz', 'en' => 'Bold']),
    ],
    'colors' => [
        '#1d4ed8' => tv(['es' => 'azul', 'en' => 'blue']),
        '#7c3aed' => tv(['es' => 'morado', 'en' => 'purple']),
        '#059669' => tv(['es' => 'verde', 'en' => 'green']),
        '#e11d48' => tv(['es' => 'rojo', 'en' => 'red']),
        '#ea580c' => tv(['es' => 'naranja', 'en' => 'orange']),
        '#0f172a' => tv(['es' => 'negro', 'en' => 'black']),
    ],
    'navLinks' => tv(['es' => ['Inicio', 'Nosotros', 'Contacto'], 'en' => ['Home', 'About', 'Contact']]),
    'waMessage' => tv([
        'es' => '¡Hola CoderMaster! Diseñé esta idea en su página y quiero hacerla realidad: una web para mi negocio de tipo "{type}", llamado "{name}", con estilo {style} y color {color}. ¿Me ayudan a cotizarla?',
        'en' => 'Hi CoderMaster! I designed this idea on your website and want to make it real: a website for my "{type}" business called "{name}", with a {style} style and {color} color. Can you help me with a quote?',
    ]),
    'game' => [
        'score'   => tv(['es' => 'Puntos', 'en' => 'Score']),
        'time'    => tv(['es' => 'Tiempo', 'en' => 'Time']),
        'best'    => tv(['es' => 'Récord', 'en' => 'Best']),
        'combo'   => tv(['es' => 'Combo', 'en' => 'Combo']),
        'newBest' => tv(['es' => '¡Nuevo récord!', 'en' => 'New record!']),
        'tiers'   => [
            ['min' => 0,  'title' => tv(['es' => 'Junior en entrenamiento', 'en' => 'Junior in training']), 'text' => tv(['es' => 'Los bugs ganaron esta vez. Tranquilo: cazarlos es nuestro trabajo, no el tuyo.', 'en' => 'The bugs won this time. Relax: hunting them is our job, not yours.'])],
            ['min' => 15, 'title' => tv(['es' => 'Desarrollador en ascenso', 'en' => 'Rising developer']), 'text' => tv(['es' => '¡Buen ritmo! Imagina lo que podemos hacer con tu proyecto a tiempo completo.', 'en' => 'Nice pace! Imagine what we can do with your project full time.'])],
            ['min' => 30, 'title' => tv(['es' => 'Cazador de bugs senior', 'en' => 'Senior bug hunter']), 'text' => tv(['es' => 'Tienes reflejos de programador. Nosotros los aplicamos para que tu web nunca falle.', 'en' => 'You have developer reflexes. We use ours so your website never fails.'])],
            ['min' => 50, 'title' => tv(['es' => '¡Nivel CoderMaster!', 'en' => 'CoderMaster level!']), 'text' => tv(['es' => 'Impresionante. Ya que sabes de calidad, hablemos de la web que tu negocio merece.', 'en' => 'Impressive. Since you know quality, let’s talk about the website your business deserves.'])],
        ],
    ],
];
?>

<section class="hero">
  <canvas class="hero-canvas" id="heroCanvas" aria-hidden="true"></canvas>
  <div class="hero-glow" aria-hidden="true"></div>
  <div class="container hero-inner">
    <div class="hero-copy">
      <span class="eyebrow"><?= tv(['es' => 'Diseño web en Cúcuta, Los Patios y Norte de Santander', 'en' => 'Web design in Cúcuta, Los Patios and Norte de Santander']) ?></span>
      <h1>
        <?= tv(['es' => 'Convertimos tus ideas en', 'en' => 'We turn your ideas into']) ?>
        <span class="rotator" id="heroRotator"><?= e($cmHome['rotator'][0]) ?></span>
        <?= tv(['es' => 'que venden', 'en' => 'that sell']) ?>
      </h1>
      <p><?= tv([
        'es' => 'Desarrollamos sitios web y aplicaciones a medida para negocios de Cúcuta, Los Patios y Norte de Santander, incluyendo soluciones robustas con Laravel, pensadas para ayudarte a captar clientes y ordenar tu negocio.',
        'en' => 'We build custom websites and applications for businesses in Cúcuta, Los Patios and Norte de Santander, including robust Laravel solutions designed to help you attract customers and organize your business.',
      ]) ?></p>
      <div class="hero-actions">
        <a href="#disena" class="btn btn-primary btn-glow"><?= tv(['es' => 'Diseña tu web ahora', 'en' => 'Design your website now']) ?> <span aria-hidden="true">→</span></a>
        <a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-ghost"><?= tv(['es' => 'Ver portafolio', 'en' => 'View portfolio']) ?></a>
      </div>
      <ul class="hero-points">
        <li><?= tv(['es' => 'Diseño 100% a medida', 'en' => '100% custom design']) ?></li>
        <li><?= tv(['es' => 'Rápidas y responsive', 'en' => 'Fast and responsive']) ?></li>
        <li><?= tv(['es' => 'Soporte después de la entrega', 'en' => 'Support after delivery']) ?></li>
      </ul>
    </div>

    <div class="builder" id="heroBuilder" aria-hidden="true">
      <div class="builder-bar">
        <span class="builder-dots"><i></i><i></i><i></i></span>
        <span class="builder-url" id="builderUrl">localhost</span>
      </div>
      <div class="builder-body">
        <pre class="builder-code" id="builderCode"></pre>
        <div class="builder-preview" id="builderPreview">
          <div class="bp-nav" data-step="nav"><b></b><span></span><span></span><span></span></div>
          <div class="bp-title" data-step="title"><?= e($cmHome['builder']['title']) ?></div>
          <div class="bp-sub" data-step="sub"><?= e($cmHome['builder']['subtitle']) ?></div>
          <div class="bp-btn" data-step="btn"><?= e($cmHome['builder']['button']) ?></div>
          <div class="bp-cards" data-step="cards"><i></i><i></i><i></i></div>
          <div class="bp-toast" data-step="deploy">✓ <?= e($cmHome['builder']['done']) ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container"><div class="stats-inner">
    <div class="stat">
      <strong><span data-count="<?= count($proyectos) ?>"><?= count($proyectos) ?></span>+</strong>
      <span><?= tv(['es' => 'Proyectos desarrollados', 'en' => 'Projects built']) ?></span>
    </div>
    <div class="stat">
      <strong><span data-count="<?= count($clientes) ?>"><?= count($clientes) ?></span>+</strong>
      <span><?= tv(['es' => 'Empresas que confían en nosotros', 'en' => 'Companies that trust us']) ?></span>
    </div>
    <div class="stat">
      <strong><span data-count="100">100</span>%</strong>
      <span><?= tv(['es' => 'Código a medida, sin plantillas', 'en' => 'Custom code, no templates']) ?></span>
    </div>
  </div></div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Qué hacemos', 'en' => 'What we do']) ?></span>
      <h2><?= tv(['es' => 'Servicios pensados para tu negocio', 'en' => 'Services designed for your business']) ?></h2>
      <p><?= tv(['es' => 'Desde una landing page hasta un sistema completo, cubrimos cada etapa del desarrollo.', 'en' => 'From a landing page to a full system, we cover every stage of development.']) ?></p>
    </div>
    <div class="grid-cards">
      <div class="card" data-tilt>
        <div class="icon"><?= icon('globe') ?></div>
        <h3><?= tv(['es' => 'Páginas web', 'en' => 'Websites']) ?></h3>
        <p><?= tv(['es' => 'Sitios corporativos y landing pages con diseño propio, optimizados para convertir visitas en clientes.', 'en' => 'Corporate sites and landing pages with original design, optimized to convert visits into customers.']) ?></p>
      </div>
      <div class="card" data-tilt>
        <div class="icon"><?= icon('code') ?></div>
        <h3><?= tv(['es' => 'Aplicaciones con Laravel', 'en' => 'Laravel applications']) ?></h3>
        <p><?= tv(['es' => 'Sistemas a medida: inventarios, reservas, paneles administrativos y más, con Laravel y buenas prácticas.', 'en' => 'Custom systems: inventory, bookings, admin dashboards and more, built with Laravel and best practices.']) ?></p>
      </div>
      <div class="card" data-tilt>
        <div class="icon"><?= icon('cart') ?></div>
        <h3><?= tv(['es' => 'Tiendas online', 'en' => 'Online stores']) ?></h3>
        <p><?= tv(['es' => 'E-commerce completos con carrito, pagos y panel de administración para gestionar tus productos.', 'en' => 'Full e-commerce stores with cart, payments and an admin panel to manage your products.']) ?></p>
      </div>
    </div>
    <p class="text-center mt-32"><a href="<?= e(page_url('/servicios')) ?>" class="btn btn-outline"><?= tv(['es' => 'Ver todos los servicios', 'en' => 'View all services']) ?></a></p>
  </div>
</section>

<section class="section configurator-section" id="disena">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Pruébalo tú mismo', 'en' => 'Try it yourself']) ?></span>
      <h2><?= tv(['es' => 'Diseña tu página web en 10 segundos', 'en' => 'Design your website in 10 seconds']) ?></h2>
      <p><?= tv(['es' => 'Elige tu tipo de negocio, escribe su nombre y juega con colores y estilos. Si te gusta, la hacemos realidad.', 'en' => 'Pick your business type, type its name and play with colors and styles. If you like it, we will make it real.']) ?></p>
    </div>

    <div class="configurator">
      <div class="config-panel">
        <div class="config-group">
          <span class="config-label">1. <?= tv(['es' => 'Tipo de negocio', 'en' => 'Business type']) ?></span>
          <div class="chip-row" id="cfgType" role="radiogroup">
            <?php $first = true; foreach ($cmHome['types'] as $key => $type): ?>
            <button type="button" class="chip<?= $first ? ' active' : '' ?>" data-value="<?= e($key) ?>" role="radio" aria-checked="<?= $first ? 'true' : 'false' ?>"><span aria-hidden="true"><?= $type['emoji'] ?></span> <?= e($type['label']) ?></button>
            <?php $first = false; endforeach; ?>
          </div>
        </div>

        <div class="config-group">
          <label class="config-label" for="cfgName">2. <?= tv(['es' => 'Nombre de tu negocio', 'en' => 'Your business name']) ?></label>
          <input type="text" id="cfgName" class="config-input" maxlength="28" placeholder="<?= e($cmHome['types']['restaurante']['name']) ?>" autocomplete="organization">
        </div>

        <div class="config-group">
          <span class="config-label">3. <?= tv(['es' => 'Color principal', 'en' => 'Main color']) ?></span>
          <div class="swatch-row" id="cfgColor" role="radiogroup">
            <?php $first = true; foreach ($cmHome['colors'] as $hex => $label): ?>
            <button type="button" class="swatch<?= $first ? ' active' : '' ?>" data-value="<?= e($hex) ?>" style="--sw: <?= e($hex) ?>" role="radio" aria-checked="<?= $first ? 'true' : 'false' ?>" aria-label="<?= e($label) ?>" title="<?= e($label) ?>"></button>
            <?php $first = false; endforeach; ?>
          </div>
        </div>

        <div class="config-group">
          <span class="config-label">4. <?= tv(['es' => 'Estilo', 'en' => 'Style']) ?></span>
          <div class="chip-row" id="cfgStyle" role="radiogroup">
            <?php $first = true; foreach ($cmHome['styles'] as $key => $label): ?>
            <button type="button" class="chip<?= $first ? ' active' : '' ?>" data-value="<?= e($key) ?>" role="radio" aria-checked="<?= $first ? 'true' : 'false' ?>"><?= e($label) ?></button>
            <?php $first = false; endforeach; ?>
          </div>
        </div>

        <a href="https://wa.me/<?= e($cmHome['whatsapp']) ?>" class="btn btn-primary btn-glow btn-block" id="cfgCta" target="_blank" rel="noopener">
          <?= tv(['es' => 'Quiero una web así', 'en' => 'I want a website like this']) ?> <span aria-hidden="true">→</span>
        </a>
        <p class="config-note"><?= tv(['es' => 'Te escribimos por WhatsApp con tu diseño. Sin compromiso.', 'en' => 'We will chat on WhatsApp about your design. No commitment.']) ?></p>
      </div>

      <div class="mock-wrap">
        <div class="mock" id="cfgPreview" data-style="moderno" style="--p: #1d4ed8">
          <div class="mock-bar">
            <span class="builder-dots"><i></i><i></i><i></i></span>
            <span class="mock-url" id="mockUrl">www.saborcucuteno.com</span>
          </div>
          <div class="mock-site">
            <nav class="mock-nav">
              <span class="mock-logo"><span id="mockEmoji">🍽️</span> <span id="mockName"><?= e($cmHome['types']['restaurante']['name']) ?></span></span>
              <span class="mock-links">
                <?php foreach ($cmHome['navLinks'] as $link): ?><span><?= e($link) ?></span><?php endforeach; ?>
              </span>
            </nav>
            <div class="mock-hero">
              <div class="mock-hero-text">
                <h3 id="mockTitle"><?= e($cmHome['types']['restaurante']['title']) ?></h3>
                <p id="mockSub"><?= e($cmHome['types']['restaurante']['sub']) ?></p>
                <span class="mock-btn" id="mockCta"><?= e($cmHome['types']['restaurante']['cta']) ?></span>
              </div>
              <div class="mock-hero-art" id="mockArt"><?= $cmHome['types']['restaurante']['emoji'] ?></div>
            </div>
            <div class="mock-feats" id="mockFeats">
              <?php foreach ($cmHome['types']['restaurante']['feats'] as $i => $feat): ?>
              <div class="mock-feat"><span><?= $cmHome['types']['restaurante']['icons'][$i] ?></span><b><?= e($feat) ?></b></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if (!empty($destacados)): ?>
<section class="section" style="background:var(--color-bg);">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Trabajos recientes', 'en' => 'Recent work']) ?></span>
      <h2><?= tv(['es' => 'Proyectos destacados', 'en' => 'Featured projects']) ?></h2>
      <p><?= tv(['es' => 'Algunas de las aplicaciones y páginas que hemos desarrollado.', 'en' => 'Some of the applications and websites we have developed.']) ?></p>
    </div>
    <div class="grid-cards">
      <?php foreach ($destacados as $p): ?>
      <a href="<?= e(page_url('/portafolio/' . $p['slug'])) ?>" class="project-card" data-tilt>
        <?php if (!empty($p['logo'])): ?>
        <div class="project-thumb has-logo">
          <img src="<?= e(site_url('/assets/img/clientes/' . $p['logo'])) ?>" alt="<?= e(tv($p['titulo'])) ?>" loading="lazy">
        </div>
        <?php else: ?>
        <div class="project-thumb" style="background: linear-gradient(135deg, <?= e($p['color']) ?>, var(--color-dark));">
          <span><?= e(mb_strtoupper(mb_substr(tv($p['titulo']), 0, 2))) ?></span>
        </div>
        <?php endif; ?>
        <div class="project-info">
          <h3><?= e(tv($p['titulo'])) ?></h3>
          <p><?= e(tv($p['resumen'])) ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <p class="text-center mt-32"><a href="<?= e(page_url('/portafolio')) ?>" class="btn btn-outline"><?= tv(['es' => 'Ver todo el portafolio', 'en' => 'View full portfolio']) ?></a></p>
  </div>
</section>
<?php endif; ?>

<section class="section game-section" id="juego">
  <div class="container">
    <div class="section-head section-head-dark">
      <span class="eyebrow"><?= tv(['es' => 'Tómate un descanso', 'en' => 'Take a break']) ?></span>
      <h2><?= tv(['es' => 'Caza el bug 🐞', 'en' => 'Bug Hunt 🐞']) ?></h2>
      <p><?= tv(['es' => 'Tienes 20 segundos para aplastar todos los bugs que puedas. Los dorados valen más y encadenar golpes multiplica tus puntos. ¡Cuidado con los ✓, esos son funciones que sí sirven!', 'en' => 'You have 20 seconds to squash as many bugs as you can. Golden ones are worth more and chaining hits multiplies your points. Watch out for the ✓, those are features that actually work!']) ?></p>
    </div>

    <div class="game" id="bugGame">
      <div class="game-hud">
        <span><?= e($cmHome['game']['score']) ?>: <b id="gScore">0</b></span>
        <span class="game-combo" id="gCombo"></span>
        <span><?= e($cmHome['game']['time']) ?>: <b id="gTime">20</b>s</span>
        <span><?= e($cmHome['game']['best']) ?>: <b id="gBest">0</b></span>
      </div>
      <div class="game-field" id="gField">
        <pre class="game-code" aria-hidden="true">function crearWeb(cliente) {
  const sitio = disenar(cliente.ideas);
  sitio.optimizar({ velocidad: 'max' });
  sitio.responsive = true;
  if (sitio.bugs.length) {
    llamar('CoderMaster');
  }
  return publicar(sitio);
}

// 🚀 tu negocio, en línea
crearWeb(tuNegocio);</pre>
        <div class="game-overlay" id="gStart">
          <div class="game-card">
            <div class="game-big" aria-hidden="true">🐞</div>
            <h3><?= tv(['es' => '¿Listo para depurar?', 'en' => 'Ready to debug?']) ?></h3>
            <p><?= tv(['es' => 'Toca o haz clic sobre los bugs antes de que se escapen.', 'en' => 'Tap or click the bugs before they escape.']) ?></p>
            <button type="button" class="btn btn-primary btn-glow" id="gPlay"><?= tv(['es' => 'Jugar', 'en' => 'Play']) ?> ▶</button>
          </div>
        </div>
        <div class="game-overlay hidden" id="gEnd">
          <div class="game-card">
            <div class="game-final"><span id="gFinal">0</span> <small><?= e(mb_strtolower($cmHome['game']['score'])) ?></small></div>
            <div class="game-record hidden" id="gRecord"><?= e($cmHome['game']['newBest']) ?></div>
            <h3 id="gTier"></h3>
            <p id="gTierText"></p>
            <div class="game-actions">
              <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-primary btn-glow"><?= tv(['es' => 'Quiero mi web sin bugs', 'en' => 'I want a bug-free website']) ?></a>
              <button type="button" class="btn btn-ghost" id="gAgain"><?= tv(['es' => 'Jugar otra vez', 'en' => 'Play again']) ?> ↻</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?= tv(['es' => 'Confianza', 'en' => 'Trust']) ?></span>
      <h2><?= tv(['es' => 'Empresas que han confiado en nosotros', 'en' => 'Companies that have trusted us']) ?></h2>
      <p><?= tv(['es' => 'Instituciones y negocios para los que hemos desarrollado páginas web y sistemas a medida.', 'en' => 'Institutions and businesses for whom we have developed websites and custom systems.']) ?></p>
    </div>
    <div class="clients-grid">
      <?php foreach ($clientes as $c): ?>
        <?php if ($c['logo']): ?>
        <a class="client-card" href="<?= e($c['enlace']) ?>" title="<?= e($c['nombre']) ?>">
          <img src="<?= e(site_url('/assets/img/clientes/' . $c['logo'])) ?>" alt="<?= e($c['nombre']) ?>" loading="lazy">
        </a>
        <?php else: ?>
        <div class="client-card client-card-placeholder" title="<?= e($c['nombre']) ?>">
          <span class="client-initial"><?= e(mb_strtoupper(mb_substr($c['nombre'], 0, 1))) ?></span>
          <span class="client-name"><?= e($c['nombre']) ?></span>
        </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section" style="padding-top:0;">
  <div class="container">
    <div class="cta cta-animated">
      <h2><?= tv(['es' => '¿Tienes un proyecto en mente?', 'en' => 'Have a project in mind?']) ?></h2>
      <p><?= tv(['es' => 'Cuéntanos qué necesitas y te ayudamos a hacerlo realidad.', 'en' => 'Tell us what you need and we will help you make it happen.']) ?></p>
      <a href="<?= e(page_url('/contacto')) ?>" class="btn btn-light"><?= tv(['es' => 'Hablemos de tu proyecto', 'en' => "Let's talk about your project"]) ?></a>
    </div>
  </div>
</section>

<script>window.CM_HOME = <?= json_encode($cmHome, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP) ?>;</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
