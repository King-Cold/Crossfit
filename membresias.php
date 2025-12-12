<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membresias- Crossfit</title>
  <link rel="stylesheet" href="css/styles.css">
  <meta name="description" content="Home de la pagina">
</head>
<body>

<div class="fondo-gris">
 <?php include "include/menu.php"?>
</div>

<div class="membresias">
    <div class="plan">
        <h4>Facturación Mensual</h4>
        <h2>PRINCIPIANTE</h2>
        <p class="precio">$95</p>

        <ul>
            <li>Acceso a clases básicas</li>
            <li>Entrenamientos guiados</li>
            <li>Corrección técnica inicial</li>
            <li>Rutinas de acondicionamiento</li>
            <li>Grupo de principiantes</li>
        </ul>
<br><br>
        <a href="inscripciones.php">ESCOGER PLAN</a>
    </div>

    <div class="plan">
        <h4>Facturación Mensual</h4>
        <h2>INTERMEDIO</h2>
        <p class="precio">$149</p>

        <ul>
            <li>Acceso completo al box</li>
            <li>Clases ilimitadas</li>
            <li>Programación semanal avanzada</li>
            <li>Correcciones técnicas continuas</li>
            <li>Acceso a entrenamientos funcionales</li>
        </ul>

        <a href="inscripciones.php">ESCOGER PLAN</a>
    </div>

    <div class="plan">
        <h4>Facturación Mensual</h4>
        <h2>AVANZADO</h2>
        <p class="precio">$199</p>

        <ul>
            <li>Acceso total + Open Box</li>
            <li>Clases ilimitadas premium</li>
            <li>Programación personalizada</li>
            <li>Asesoría de nutrición básica</li>
            <li>Sesiones para mejorar PRs</li>
        </ul>

       <a href="inscripciones.php">ESCOGER PLAN</a>
    </div>
</div>

<?php include "include/abajo.php"?>
<script>
  const links = document.querySelectorAll('.navegador a');
  links.forEach(link => {
    if(link.href === window.location.href){
      link.classList.add('active');
    }
  });
</script>
</body>
</html>