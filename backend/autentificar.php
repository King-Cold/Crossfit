<?php 

  require("bd.php");

  $nombre = addslashes($_POST["nombre"]);
  $contrasena = addslashes($_POST["contrasena"]);

  $comparar = "SELECT * FROM usuarios WHERE nombre= '$nombre' AND contrasena = '$contrasena'";
  $verificar_usuario = mysqli_query($conectar, $comparar);

  if(mysqli_num_rows($verificar_usuario) > 0){
    session_start();
    $_SESSION["autentificado"] = "SI";
    header("Location: ../inicio.php");
  } else {
    echo "<script>
              alert('Usuario y contraseña incorrectos');
              window.location = '../login.php?errorusuario=SI';
          </script>";
  }

  exit();


?>