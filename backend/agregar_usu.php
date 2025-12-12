<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mudanzas</title>

<style>
    body {
      background-color: #222222;
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

    .success { color: #2ea44f; }  /* Verde */
    .error { color: #d31b1b; }    /* Rojo */

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

$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];
$email = $_POST["email"];

// Verificar si el usuario ya existe
$verificar = mysqli_query($conectar, "SELECT * FROM usuarios WHERE nombre='$nombre'");

if (mysqli_num_rows($verificar) > 0) {
?>
    <div class="card">
        <div class="icono error">✖</div>
        <h1>Usuario ya existente</h1>
        <p>Ese usuario ya está registrado. Intente con otro.</p>
        <a class="btn" href="../agregar_usuarios.php">Volver</a>
    </div>
<?php
    exit();
}

// Si no existe, insertarlo
$insertar = "INSERT INTO usuarios (nombre, email,contrasena) 
             VALUES ('$nombre','$email' ,'$contrasena' )";
$query = mysqli_query($conectar, $insertar);

?>

<div class="card">
    <div class="icono success">✔</div>
    <h1>¡Felicidades!</h1>
    <p>Usuario registrado correctamente.</p>
    <a class="btn" href="../agregar_usuarios.php">Regresar</a>
</div>

</body>
</html>
