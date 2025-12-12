<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/admin.css">
  <title>Login</title>
</head>
<body>
  <div class="fondo">
<div class="cont ">
      <div class="div">
        <div class="div-izq">
        </div>
        <div class="div-der centrar">
          <div class="logo">
            <img src="img/23.png" alt=""><br>
          </div>
          <h2>CROS<span class="rojo">SFIT</span></h2><br>
          <h1>User Login</h1>
          <br>
          
<form method=POST action="backend/autentificar.php" id="login">
  <?php if(isset($_GET['errorusuario']) && $_GET['errorusuario'] == "SI"): ?>
    <div class="error-msg">
        X Usuario o contraseña incorrectos
    </div>
    <br>
<?php endif; ?>
            <label for="nombre">Usuario</label><br>
          <input type="text" id="nombre" name="nombre" ><br><br>
          <label for="contrasena">Contraseña</label><br>
          <input type="password" id="contrasena" name="contrasena" >
    <br><br>
          <button type="button" id="btn_login">Iniciar Sesion</button>
</form>
        </div>
      </div>


</div>
  </div>
  <script type="text/javascript">
$("#btn_login").click(function() {

  if ($("#nombre").val().trim() == "") {
    alert("Escribe el nombre de nombre");
    $("#nombre").focus();
    return;
  }

  if ($("#contrasena").val().trim() == "") {
    alert("Escribe una contraseña");
    $("#contrasena").focus();
    return;
  }
  document.getElementById("login").submit();
});
</script>
</body>
</html>