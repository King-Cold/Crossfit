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
        <h1 class="titulo-contenido">INSCRIPCIONES</h1>
        <br>
<div class="tabla">
      <table>
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Email</th>
          <th>Edad</th>
          <th>Peso</th>
          <th>Altura</th>
          <th>Sexo</th>
          <th>Sangre</th>
          <th>Rutina</th>
          <th>Horario</th>
          <th>Foto</th>
          <th>Eliminar</th>
        </tr>

        <?php 
        require 'backend/bd.php';
        $datos = "SELECT * FROM inscripciones ORDER BY id ASC";
        $resultado = mysqli_query($conectar, $datos);

        if(mysqli_num_rows($resultado) > 0) {
          while($fila = mysqli_fetch_assoc($resultado)){
        ?>

        <tr>
          <td><?php echo $fila["id"]; ?></td>
          <td><?php echo $fila["nombre"]; ?></td>
          <td><?php echo $fila["email"]; ?></td>
          <td><?php echo $fila["edad"]; ?></td>
          <td><?php echo $fila["peso"]; ?></td>
          <td><?php echo $fila["altura"]; ?></td>
           <td><?php echo $fila["sexo"]; ?></td>
          <td><?php echo $fila["sangre"]; ?></td>
          <td><?php echo $fila["rutina"]; ?></td>
          <td><?php echo $fila["horario"]; ?></td>
           <td>
        <a href="<?php echo $fila['foto']?>"> 
            <img class="fotoproducto" src="<?php echo $fila['foto']?>" alt="Imagen de Producto">
        </a>
    </td>
          <td>
    <a href="#" onclick="validar ('backend/eliminar_inscripciones.php?id=<?= $fila['id'] ?>')" class="btn-eliminar">Eliminar</a>
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