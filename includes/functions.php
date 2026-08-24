<?php

function clean(string $value): string
{
    return trim(strip_tags($value));
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function icon(string $name): string
{
    $icons = [
        'globe' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/>',
        'code' => '<path d="M8 6L2 12l6 6M16 6l6 6-6 6"/>',
        'cart' => '<circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/><path d="M2 3h2l2.4 12.4a2 2 0 002 1.6h8.6a2 2 0 002-1.7L21 8H6"/>',
        'rocket' => '<path d="M12 2c3 2 5 6 5 10c0 2-1 4-2 5l-3 3-3-3c-1-1-2-3-2-5c0-4 2-8 5-10z"/><circle cx="12" cy="10" r="1.5"/><path d="M9 15l-3 3M15 15l3 3"/>',
        'edit' => '<path d="M4 4h11l5 5v11H4z"/><path d="M9 13l6-6 2 2-6 6H9v-2z"/>',
        'wrench' => '<path d="M14.7 6.3a4 4 0 00-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 005.4-5.4l-2.8 2.8-2-2 2.8-2.8z"/>',
        'trending' => '<path d="M3 17l6-6 4 4 8-8"/><path d="M15 7h6v6"/>',
        'target' => '<circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="2"/>',
        'message' => '<path d="M21 11.5a8.5 8.5 0 01-8.5 8.5a8.44 8.44 0 01-4-1L3 21l1.5-4a8.44 8.44 0 01-1-4A8.5 8.5 0 0112 3.5a8.5 8.5 0 019 8z"/>',
        'shield' => '<path d="M12 3l7 4v5c0 5-3.5 8.5-7 9c-3.5-.5-7-4-7-9V7z"/><path d="M9 12l2 2 4-4"/>',
        'graduation' => '<path d="M12 3L2 8l10 5 10-5-10-5z"/><path d="M6 10v5c0 1.5 3 3 6 3s6-1.5 6-3v-5"/>',
        'card' => '<rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/>',
        'parking' => '<circle cx="12" cy="12" r="9"/><path d="M9 16V8h3.5a2.5 2.5 0 010 5H9"/>',
        'building' => '<rect x="4" y="3" width="16" height="18"/><path d="M9 8h1M14 8h1M9 12h1M14 12h1M9 16h1M14 16h1"/>',
    ];

    $path = $icons[$name] ?? $icons['target'];

    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

function site_url(string $path = '/'): string
{
    $documentRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
    $projectRoot = realpath(__DIR__ . '/..');
    $basePath = '';

    if ($documentRoot && $projectRoot && str_starts_with($projectRoot, $documentRoot)) {
        $basePath = str_replace('\\', '/', substr($projectRoot, strlen($documentRoot)));
        $basePath = rtrim($basePath, '/');
    }

    return $basePath . '/' . ltrim($path, '/');
}

function site_absolute_url(string $path = '/'): string
{
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'codermaster.com';

    return $scheme . '://' . $host . site_url($path);
}

function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

function enviar_email(string $nombre, string $email, string $telefono, string $mensaje): bool
{
    $destino = 'contacto@codermaster.com';
    $asunto  = 'Nuevo mensaje de contacto - CoderMaster';
    $cuerpo  = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\n\nMensaje:\n$mensaje";
    $headers = "From: web@codermaster.com\r\nReply-To: $email\r\n";

    return @mail($destino, $asunto, $cuerpo, $headers);
}
