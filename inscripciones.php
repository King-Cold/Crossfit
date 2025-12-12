<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripciones- Crossfit</title>
  <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta name="description" content="Home de la pagina">
</head>
<body>

<div class="fondo-gris">
 <?php include "include/menu.php"?>
</div>
<div class="inscripciones">
  <div class="inscripciones-izq izq ">
  <h2>“Transforma tu cuerpo. Transforma tu vida. <span class="rojo">Empieza hoy.</span>”</h2>
  </div>
  <div class="formulario-inscripcion der">
    <h2>Inscripción CrossFit</h2>
    <p>Completa tu información para unirte a nuestra comunidad.</p><br>
    <hr class="ancho" >
  
    <form action="backend/agregar_solicitud.php" method="POST" enctype="multipart/form-data" id="Formulario1">
  
      <!-- Nombre -->
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" >
      
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="ejemplo@email.com" >

      <label for="edad">Edad</label>
      <input type="number" id="edad" name="edad" placeholder="Ej. 25" min="10" max="80" >
  
      <!-- Email -->
  
      <!-- Peso -->
      <div class="epas">
<div class="cajita">
          <label for="peso">Peso (kg)</label>
          <input type="number" id="peso" name="peso" placeholder="Ej. 70" step="0.1" >
</div>
    
        <!-- Altura -->
<div class="cajita">
          <label for="altura">Altura (cm)</label>
          <input type="number" id="altura" name="altura" placeholder="Ej. 175" >
      
</div>
        <!-- Sexo -->
      <div class="cajita">
          <label for="sexo">Sexo</label>
          <select name="sexo" id="sexo" >
            <option value="">Selecciona una opción</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
      </div>
    
        <!-- Tipo de Sangre -->
  <div class="cajita">
          <label for="sangre">Tipo de sangre</label>
          <select name="sangre" id="sangre">
            <option value="">Selecciona tu tipo</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
        </div>
  </div>
  
      <!-- Tipo de Rutinas -->
      <div class="izq">
        <label for="rutina">Tipo de rutina</label>
        <select name="rutina" id="rutina" >
          <option value="">Selecciona tu rutina</option>
          <option value="crossfit">CrossFit Regular</option>
          <option value="halterofilia">Halterofilia</option>
          <option value="gimnasticos">Gimnásticos</option>
          <option value="endurance">Endurance</option>
          <option value="powerlifting">Powerlifting</option>
          <option value="fundamentos">Fundamentos</option>
        </select>
      </div>
  
      <!-- Horario -->
<div class="der">
        <label for="horario">Horario preferido</label>
        <select name="horario" id="horario" >
          <option value="">Selecciona tu horario</option>
          <option value="6am">6:00 AM</option>
          <option value="7am">7:00 AM</option>
          <option value="8am">8:00 AM</option>
          <option value="5pm">5:00 PM</option>
          <option value="6pm">6:00 PM</option>
          <option value="7pm">7:00 PM</option>
        </select>
</div>
  
      <!-- Foto de perfil -->
      <label for="foto">Foto de perfil</label>
      <input type="file" id="foto" name="foto" accept="image/*">
  
      <!-- Botón -->
      <button type="button" class="btn-inscribir" id="btn_inscribir" >Enviar inscripción</button>
  
    </form>
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
<script type="text/javascript">
 $("#btn_inscribir").click(
    function (){


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
    if ($("#edad").val().trim() == "") {
        alert("Escribe tu edad");
        $("#edad").focus();
        return 0;
    }

    // Validar peso
    if ($("#peso").val().trim() == "") {
        alert("Escribe tu peso");
        $("#peso").focus();
        return 0;
    }

    // Validar altura
    if ($("#altura").val().trim() == "") {
        alert("Escribe tu altura");
        $("#altura").focus();
        return 0;
    }

    // Validar sexo
    if ($("#sexo").val() == "") {
        alert("Selecciona tu sexo");
        $("#sexo").focus();
        return 0;
    }

    // Validar tipo de sangre
    if ($("#sangre").val() == "") {
        alert("Selecciona tu tipo de sangre");
        $("#sangre").focus();
        return 0;
    }

    // Validar rutina
    if ($("#rutina").val() == "") {
        alert("Selecciona un tipo de rutina");
        $("#rutina").focus();
        return 0;
    }

    // Validar horario
    if ($("#horario").val() == "") {
        alert("Selecciona un horario");
        $("#horario").focus();
        return 0;
    }

    // Validar foto
    if ($("#foto").val() == "") {
        alert("Selecciona una foto de perfil");
        $("#foto").focus();
        return 0;
    }

    $("#Formulario1").submit(); 
});
</script>
</body>
</html>