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
        <h1 class="titulo-contenido">USUARIOS</h1>
        <br>

        <a href="agregar_usuarios.php" class="btn-uso">Agregar Usuario</a>
<div class="tabla">
      <table>
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Email</th>
          <th>Contraseña</th>
          <th>Eliminar</th>
        </tr>

        <?php 
        require 'backend/bd.php';
        $datos = "SELECT * FROM usuarios ORDER BY id ASC";
        $resultado = mysqli_query($conectar, $datos);

        if(mysqli_num_rows($resultado) > 0) {
          while($fila = mysqli_fetch_assoc($resultado)){
        ?>

        <tr>
          <td><?php echo $fila["id"]; ?></td>
          <td><?php echo $fila["nombre"]; ?></td>
          <td><?php echo $fila["email"]; ?></td>
          <td><?php echo $fila["contrasena"]; ?></td>
           <td>
    <a href="#" onclick="validar ('backend/eliminar_usu.php?id=<?= $fila['id'] ?>')" class="btn-eliminar">Eliminar</a>
          </td>
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
<script>
function validar(url) {
    if (confirm("¿Seguro que deseas eliminar este registro?")) {
        window.location = url;
    }
}
</script>
</body>
</html>