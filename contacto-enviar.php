<?php
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect(site_url('/contacto'));
}

$nombre   = clean($_POST['nombre'] ?? '');
$email    = clean($_POST['email'] ?? '');
$telefono = clean($_POST['telefono'] ?? '');
$mensaje  = clean($_POST['mensaje'] ?? '');

if ($nombre === '' || $mensaje === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect(site_url('/contacto?status=error'));
}

try {
    $pdo = db_connect();
    $stmt = $pdo->prepare(
        'INSERT INTO contactos (nombre, email, telefono, mensaje) VALUES (:nombre, :email, :telefono, :mensaje)'
    );
    $stmt->execute([
        'nombre'   => $nombre,
        'email'    => $email,
        'telefono' => $telefono,
        'mensaje'  => $mensaje,
    ]);

    enviar_email($nombre, $email, $telefono, $mensaje);

    redirect(site_url('/contacto?status=ok'));
} catch (PDOException $e) {
    error_log('CoderMaster - error al guardar contacto: ' . $e->getMessage());
    redirect(site_url('/contacto?status=error'));
}
