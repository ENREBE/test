<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ENREBE – Entrenamiento de Reenfoque Emocional, Bioquímico y Espiritual</title>
  <!-- Fuentes Google -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Archivo de Estilos en carpeta CSS -->
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<nav>
  <a href="index.php" class="nav-logo">ENREBE</a>
  <div class="nav-links">
    <a href="index.php">Inicio</a>
    <a href="resignificacion.php">Resignificación</a>
    <a href="ciencia.php">Fundamento Científico</a>
    <a href="herramientas.php">Herramientas</a>
    <a href="filosofia.php">Bases Filosóficas</a>
    <a href="tests.php">Talleres y Formaciones</a>
    <a href="terapeutas.php">Terapeutas</a>
    
    <?php if(isset($_SESSION['usuario_id'])): ?>
      <a href="dashboard.php" class="btn-login-nav">Mi Dashboard</a>
      <?php if($_SESSION['usuario_rol'] === 'admin'): ?>
        <a href="admin.php" class="btn-admin-nav">Admin</a>
      <?php endif; ?>
      <a href="logout.php" class="btn-logout-nav">Salir</a>
    <?php else: ?>
      <a href="login.php" class="btn-login-nav">Iniciar Sesión</a>
    <?php endif; ?>
  </div>
</nav>

<div class="page-container">