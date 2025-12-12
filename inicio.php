<?php
require "backend/seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel Administrativo</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="header">PANEL ADMINISTRATIVO</div>

<div class="contenedor">
<?php include "include/nav.php"?>
    <div class="contenido">
        <h1 class="titulo-contenido">PÁGINA DE INICIO DEL PANEL</h1>

    </div>

</div>
<script>
  const links = document.querySelectorAll('.menu a');
  links.forEach(link => {
    if(link.href === window.location.href){
      link.classList.add('active');
    }
  });
</script>
</body>
</html>