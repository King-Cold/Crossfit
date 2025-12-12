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
    <div class="contenido-comentarios">
      <br>
        <h1 class="titulo-contenido">COMENTARIOS</h1>
        <br>
<div class="tabla">
      <table>
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Email</th>
          <th>Comentario</th>
        </tr>

        <?php 
        require 'backend/bd.php';
        $datos = "SELECT * FROM comentarios ORDER BY id ASC";
        $resultado = mysqli_query($conectar, $datos);

        if(mysqli_num_rows($resultado) > 0) {
          while($fila = mysqli_fetch_assoc($resultado)){
        ?>

        <tr>
          <td><?php echo $fila["id"]; ?></td>
          <td><?php echo $fila["nombre"]; ?></td>
          <td><?php echo $fila["email"]; ?></td>
          <td><?php echo $fila["comentario"]; ?></td>
        </tr>

        <?php
          }
        }
        ?>

      </table>
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
</body>
</html>