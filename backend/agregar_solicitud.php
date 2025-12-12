<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripción CrossFit</title>

<style>
    body {
        background-color:#222222;
        font-family: 'Poppins', Arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        background: white;
        width: 90%;
        max-width: 450px;
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        animation: fadeIn 0.8s ease;
    }

    .icono {
        font-size: 70px;
        margin-bottom: 15px;
    }

    .success { color: #2ea44f; }
    .error { color: #d31b1b; }

    h1 {
        font-size: 26px;
        color: #01336e;
    }

    p {
        font-size: 16px;
        color: #444;
    }

    .btn {
        margin-top: 25px;
        display: inline-block;
        padding: 12px 25px;
        background: #01336e;
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 8px;
        transition: 0.3s;
    }

    .btn:hover {
        background: #021d3e;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body>
<?php 

include("bd.php");

// VARIABLES DEL FORMULARIO
$nombre      = $_POST["nombre"];
$edad        = $_POST["edad"];
$email       = $_POST["email"];
$peso        = $_POST["peso"];
$altura      = $_POST["altura"];
$sexo        = $_POST["sexo"];
$sangre = $_POST["sangre"];
$rutina = $_POST["rutina"];
$horario     = $_POST["horario"];

// FOTO DE PERFIL
$nombre_imagen   = $_FILES['foto']['name'];
$ruta_temporal   = $_FILES['foto']['tmp_name'];
$peso_foto       = $_FILES['foto']['size'];
$tipoFoto        = $_FILES['foto']['type'];

// Nombre único
$timestamp = date('YmdHis');
$nombre_unico = $timestamp . "-" . $nombre_imagen;

// Carpeta donde se guardan (TÚ LA PEDISTE)
$ruta_carpeta = "../inscripciones";
$ruta_servidor = $ruta_carpeta . "/" . $nombre_unico;

// Ruta que se guarda en la BD
$ruta_para_bd = "inscripciones/" . $nombre_unico;


// VALIDACIÓN PESO DE FOTO
if ($peso_foto > 2000000) {  // 2MB
    echo '<script>
        alert("La imagen es demasiado pesada (máx 2MB)");
        window.history.go(-1);
    </script>';
    exit();
}

// VALIDACIÓN DE TIPO DE IMAGEN
if ($tipoFoto != "image/jpeg" && $tipoFoto != "image/png" && $tipoFoto != "image/jpg") {
    echo '<script>
    alert("El archivo no es una imagen válida (JPG o PNG)");
    window.history.go(-1);
    </script>';
    exit();
}

// VERIFICAR SI EL CORREO YA EXISTE
$verificar = mysqli_query($conectar, "SELECT * FROM inscripciones WHERE email = '$email'");

if (mysqli_num_rows($verificar) > 0) {
?>
    <div class="card">
        <div class="icono error">✖</div>
        <h1>Correo ya registrado</h1>
        <p>Este correo ya está inscrito en el sistema.</p>
        <a class="btn" href="../inscripciones.php">Volver</a>
    </div>
<?php
    exit();
}


// MOVER IMAGEN AL SERVIDOR
if (move_uploaded_file($ruta_temporal, $ruta_servidor)) {

    // INSERT FINAL CON TODOS LOS DATOS
    $insertar = "INSERT INTO inscripciones 
    (nombre, edad, email, peso, altura, sexo, sangre, rutina, horario, foto)
    VALUES 
    ('$nombre', '$edad', '$email', '$peso', '$altura', '$sexo', '$sangre', '$rutina', '$horario', '$ruta_para_bd')";

    $query = mysqli_query($conectar, $insertar);

    if ($query) {
?>
        <div class="card">
            <div class="icono success">✔</div>
            <h1>¡Inscripción completada!</h1>
            <p>El usuario fue registrado correctamente.</p>
            <a class="btn" href="../inscripciones.php">Regresar</a>
        </div>
<?php
    } else {
        echo '<script>
        alert("Error en la BD: ' . mysqli_error($conectar) . '");
        </script>';
    }

} else {
    echo '<script>
    alert("Error al subir la foto al servidor.");
    window.history.go(-1);
    </script>';
}

?>
</body>
</html>
