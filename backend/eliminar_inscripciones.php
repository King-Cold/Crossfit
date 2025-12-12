<?php 
$id =$_GET ['id'];
require "bd.php";

$borrar = "DELETE FROM inscripciones WHERE id = '$id'";

$resultado = mysqli_query($conectar, $borrar);
  
if ($resultado) {
    echo "<script>
              alert('SE ELIMINO EL DATO CORRECTAMENTE');
              window.location = '../ver_inscripciones.php';
          </script>";
}

?>