<?php
require_once __DIR__ . '/lang.php';

if (!isset($pageTitle)) {
    $pageTitle = tv(['es' => 'Inicio', 'en' => 'Home']);
}
if (!isset($pageDescription)) {
    $pageDescription = tv([
        'es' => 'CoderMaster - Diseño de páginas web y aplicaciones a medida.',
        'en' => 'CoderMaster - Custom website design and web application development.',
    ]);
}

$currentPath    = trim((string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$basePath      = trim(parse_url(site_url('/'), PHP_URL_PATH), '/');
if ($basePath !== '' && str_starts_with($currentPath, $basePath)) {
  $currentPath = trim(substr($currentPath, strlen($basePath)), '/');
}
if ($currentPath === 'en' || str_starts_with($currentPath, 'en/')) {
  $currentPath = trim(substr($currentPath, 2), '/');
}
$currentSegment = $currentPath === '' ? 'inicio' : explode('/', $currentPath)[0];
$currentUrlPath = $currentPath === '' ? '/' : '/' . $currentPath;

$esAbsUrl = site_absolute_url($currentUrlPath);
$enAbsUrl = site_absolute_url('/en' . ($currentPath === '' ? '' : '/' . $currentPath));
$canonicalAbsUrl = current_lang() === 'en' ? $enAbsUrl : $esAbsUrl;
?>
<!DOCTYPE html>
<html lang="<?= e(current_lang()) ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($pageTitle) ?> | CoderMaster</title>
<meta name="description" content="<?= e($pageDescription) ?>">
<meta property="og:title" content="<?= e($pageTitle) ?> | CoderMaster">
<meta property="og:description" content="<?= e($pageDescription) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= e($canonicalAbsUrl) ?>">
<meta property="og:locale" content="<?= current_lang() === 'en' ? 'en_US' : 'es_CO' ?>">
<meta name="twitter:card" content="summary">
<meta name="geo.region" content="CO-NSA">
<meta name="geo.placename" content="Cúcuta, Norte de Santander, Colombia">
<link rel="canonical" href="<?= e($canonicalAbsUrl) ?>">
<link rel="alternate" hreflang="es" href="<?= e($esAbsUrl) ?>">
<link rel="alternate" hreflang="en" href="<?= e($enAbsUrl) ?>">
<link rel="alternate" hreflang="x-default" href="<?= e($esAbsUrl) ?>">
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'ProfessionalService',
  'name' => 'CoderMaster',
  'url' => site_absolute_url('/'),
  'description' => $pageDescription,
  'telephone' => '+57 315 619 1056',
  'address' => [
    '@type' => 'PostalAddress',
    'addressLocality' => 'Cúcuta',
    'addressRegion' => 'Norte de Santander',
    'addressCountry' => 'CO'
  ],
  'areaServed' => [
    ['@type' => 'City', 'name' => 'Cúcuta'],
    ['@type' => 'City', 'name' => 'Los Patios'],
    ['@type' => 'City', 'name' => 'Villa del Rosario'],
    ['@type' => 'AdministrativeArea', 'name' => 'Norte de Santander']
  ],
  'priceRange' => '$$'
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
</script>
<link rel="icon" href="<?= e(site_url('/assets/img/favicon.svg')) ?>" type="image/svg+xml">
<link rel="icon" href="<?= e(site_url('/assets/img/logo.png')) ?>" type="image/png">
<link rel="apple-touch-icon" href="<?= e(site_url('/assets/img/logo.png')) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= e(site_url('/assets/css/style.css')) ?>">
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <a href="<?= e(page_url('/')) ?>" class="logo">
      <img src="<?= e(site_url('/assets/img/logo.png')) ?>" alt="CoderMaster" class="logo-img">
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="<?= e(tv(['es' => 'Abrir menú', 'en' => 'Open menu'])) ?>" aria-expanded="false" aria-controls="mainNav">
      <span></span><span></span><span></span>
    </button>

    <nav class="main-nav" id="mainNav">
      <ul>
        <li><a href="<?= e(page_url('/')) ?>" class="<?= $currentSegment === 'inicio' ? 'active' : '' ?>"><?= tv(['es' => 'Inicio', 'en' => 'Home']) ?></a></li>
        <li><a href="<?= e(page_url('/servicios')) ?>" class="<?= $currentSegment === 'servicios' ? 'active' : '' ?>"><?= tv(['es' => 'Servicios', 'en' => 'Services']) ?></a></li>
        <li><a href="<?= e(page_url('/portafolio')) ?>" class="<?= $currentSegment === 'portafolio' ? 'active' : '' ?>"><?= tv(['es' => 'Portafolio', 'en' => 'Portfolio']) ?></a></li>
        <li><a href="<?= e(page_url('/precios')) ?>" class="<?= $currentSegment === 'precios' ? 'active' : '' ?>"><?= tv(['es' => 'Precios', 'en' => 'Pricing']) ?></a></li>
        <li><a href="<?= e(page_url('/nosotros')) ?>" class="<?= $currentSegment === 'nosotros' ? 'active' : '' ?>"><?= tv(['es' => 'Nosotros', 'en' => 'About']) ?></a></li>
        <li><a href="<?= e(page_url('/contacto')) ?>" class="btn-nav <?= $currentSegment === 'contacto' ? 'active' : '' ?>"><?= tv(['es' => 'Contacto', 'en' => 'Contact']) ?></a></li>
        <li class="lang-switch">
          <a href="<?= e($esAbsUrl) ?>" class="lang-link <?= current_lang() === 'es' ? 'active' : '' ?>" hreflang="es">ES</a><span class="lang-sep">/</span><a href="<?= e($enAbsUrl) ?>" class="lang-link <?= current_lang() === 'en' ? 'active' : '' ?>" hreflang="en">EN</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<main>
