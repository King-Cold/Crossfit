<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - Crossfit</title>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <meta name="description" content="Home de la pagina">
</head>
<body>

<div class="fondo-gris">
       <?php include "include/menu.php"?>
</div>
<div class="contactanos">
  <br>
  <h2  class="subtitulos centrar">¿Tienes dudas o quieres comenzar a entrenar?<br><br> <span class="rojo-bajo">Escríbenos y con gusto te ayudamos.</span></h2>
  <br><br>
  <div class="cont-contacto ">
    <div class="contac-izq">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.4201764326524!2d-89.59881176145744!3d20.999035699236952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676cd435050e5%3A0xa35ad3210ee96627!2sC.%203%20396%2C%20Felipe%20Carrillo%20Puerto%2C%2097208%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1765383795863!5m2!1ses!2smx" width="100%" height="555px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contac-dere">
      <h1>CONTACTO</h1>
      <hr>
      <br>

      <!-- FORMULARIO CON IDs Y NAMES -->
      <form action="backend/msj_contactanos.php" id="formContacto" name="formContacto" method="POST">
        <label for="nombre">Nombre completo:</label>
          <input type="text" id="nombre" name="nombre" placeholder="Nombre completo"><br>

        <label for="email">Correo Electrónico:</label>
          <input type="text" id="email" name="email" placeholder="E-mail"><br>

        <label for="comentario">Comentario:</label>
          <textarea id="comentario" name="comentario" placeholder="Mensaje"></textarea><br>

        <button id="btn-contactar" name="btn-contactar" class="btn-blanco" type="button">Enviar</button>
      </form>

    </div>
  </div>
</div>

<br>

<div class="redes ancho centrar mar">
  <div class="logo-red ">
      <img src="img/logo-cf.png" alt="">
  </div>

  <br>

  <div class="img-redes-iz">
      <img src="img/location.svg" alt="">
      <p>C. 3 396, Felipe Carrillo Puerto, 97208 Mérida, Yuc.</p>
  </div>

  <div class="img-redes-de">
      <img src="img/email.svg" alt="">
      <p>contacto@tuboxcrossfit.com</p>
  </div>

  <div class="redes-ab">
      <img src="img/whatsapp.svg" alt="">
      <p>+52 999 123 4567</p>
      <br><br>
      <hr>

      <div class="icon_redes">
        <br>
        <img src="img/instagram.svg" alt="">
        <img src="img/facebook.svg" alt="">
        <img src="img/twitter.svg" alt="">
      </div>
  </div>
</div>

<script>
  const links = document.querySelectorAll('.navegador a');
  links.forEach(link => {
    if(link.href === window.location.href){
      link.classList.add('active');
    }
  });
</script>
<script type="text/javascript">
 $("#btn-contactar").click(
    function (){ // Evita el envío automático

    // Validar nombre
    if ($("#nombre").val().trim() == "") {
        alert("Escribe tu nombre");
        $("#nombre").focus();
        return 0;
    }

    // Validar email
    if ($("#email").val().trim() == "") {
        alert("Escribe tu email");
        $("#email").focus();
        return 0;
    }
    if (!$("#email")[0].checkValidity()) {
        alert("Escribe el correo de forma correcta");
        $("#email").focus();
        return 0;
    }

    // Validar edad
    if ($("#comentario").val().trim() == "") {
        alert("Escribe tu edad");
        $("#comentario").focus();
        return 0;
    }

    $("#formContacto").submit(); 
});
</script>

</body>
<br>
<?php include "include/abajo.php"?>
</html>
