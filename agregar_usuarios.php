<?php
require "backend/seguridad.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel Administrativo</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="header">PANEL ADMINISTRATIVO</div>

<div class="contenedor">
<?php include "include/nav.php"?>
    <div class="contenido-comentarios">
      <br>
        <h1 class="titulo-contenido">USUARIOS</h1>
        <br>

        <a href="ver_usuarios.php" class="btn-uso">Regresar</a>

        <div class="agre_usu">
  <form id="usu" action="backend/agregar_usu.php" method="post">
    <label for="nombre">Nombre del Usuario:</label><br>
    <input type="text" name="nombre" id="nombre" required> <br><br>
    <label for="nombre">Email:</label><br>
    <input type="email" name="email" id="email"  required><br><br>
    <label for="nombre">Contraseña:</label><br>
    <input type="password" name="contrasena" id="contrasena"  required>
    <br><br>
    <button id="btn_ag_usu" class="btn-gu" type="button">Guardar Usuario</button>
  
  </form>
</div>

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
<script type="text/javascript">
$("#btn_ag_usu").click(function() {

  if ($("#nombre").val().trim() == "") {
    alert("Escribe el nombre de usuario");
    $("#nombre").focus();
    return;
  }
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


  if ($("#contrasena").val().trim() == "") {
    alert("Escribe una contraseña");
    $("#contrasena").focus();
    return;
  }

  if ($("#contrasena").val().length < 4) {
    alert("La contraseña debe tener mínimo 4 caracteres");
    $("#contrasena").focus();
    return;
  }


  document.getElementById("usu").submit();
});
</script>
</body>
</html>