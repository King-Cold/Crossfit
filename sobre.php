<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nosotros- Crossfit</title>
  <link rel="stylesheet" href="css/styles.css">
  <meta name="description" content="Home de la pagina">
</head>
<body>

<div class="fondo-gris">
 <?php include "include/menu.php"?>
</div>

<div class="sobre_nosotros">
  <br><br>

  <h2 class="subtitulos centrar">SOBRE NOSOTROS</h2>
  <br>
  <hr class="ancho">
  <br><br>

  <div class="nosotros ancho centrar">

    <h1>
      <strong class="rojo">Crossfit</strong> es más que un gimnasio, somos una comunidad
      enfocada en el esfuerzo, la disciplina y la superación personal.
    </h1>

    <br><br>

    <!-- BLOQUE IZQUIERDA / DERECHA -->
    <div class="nosotros-izq izq">
      <h3>Nuestra Historia</h3>
      <hr>
      <br>
      <p>
        Nacimos con la idea de crear un espacio diferente, donde el entrenamiento fuera funcional,
        efectivo y accesible para todos, sin importar el nivel o la experiencia.
      </p>

      <br><br>

      <h3>Qué Hacemos</h3>
      <hr>
      <br>
      <p>
        Entrenamos bajo la metodología CrossFit, basada en movimientos funcionales,
        constantemente variados y ejecutados a diferentes niveles de intensidad.
      </p>
    </div>

    <div class="nosotros-de der">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/8cPQpSS8Tt4?si=FzDCvWbey9NYWUPi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <br>
    </div>

    <br><br>

    <!-- MISIÓN / VISIÓN / VALORES -->
    <div class="misi-visi">

      <div class="mision izq">
        <h4>Misión</h4>
        <br>
        <p>
          Nuestra misión es transformar vidas utilizando el CrossFit como vehículo, proporcionando coaching excepcional y programación funcional para forjar atletas mental y físicamente resilientes, superando límites y fomentando una vida activa y fuerte.
        </p>
      </div>

      <div class="vision der">
        <h4>Visión</h4>
        <br>
        <p >
         Ser el referente líder en fitness funcional y la comunidad de CrossFit más influyente, reconocida por nuestra excelencia y cultura de apoyo, inspirando un estilo de vida saludable y activo para todos nuestros miembros, de por vida.
        </p>
      </div>
 </div>
</div>
<hr class="ancho">
<div class="galeria  centrar">
  <img src="img/gim.jpg" alt="">
   <img src="img/g2.png" alt="">
    <img src="img/g3.png" alt="">
     <img src="img/g4.png" alt="">
      <img src="img/g5.jpg" alt="">
       <img src="img/g6.jpg" alt="">
</div>
<hr class="ancho">
<br>
<div class="cierre fondo-gris">
 <p class=" ancho ">"No se trata solo de levantar pesas o registrar tiempos; se trata de construir la mejor versión de ti mismo. Si estás listo para dejar atrás las excusas y unirte a una comunidad que te retará y te apoyará en cada paso, es hora de empezar. Tu transformación comienza hoy mismo."<br>
 <a class="btn_rojo" href="membresias.php"
    >Inscribete
    </a></p>
 
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