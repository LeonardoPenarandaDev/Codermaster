<?php

function clean(string $value): string
{
    return trim(strip_tags($value));
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
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
