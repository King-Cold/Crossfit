<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto CrossFit</title>

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

// Variables del formulario
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$comentario= $_POST["comentario"];

// Verificar si el correo ya existe
$verificar = mysqli_query($conectar, "SELECT * FROM comentarios WHERE email = '$email'");

if (mysqli_num_rows($verificar) > 0) {
?>
    <div class="card">
        <div class="icono error">✖</div>
        <h1>Correo ya registrado</h1>
        <p>Este correo ya dejó un comentario previamente.</p>
        <a class="btn" href="../contacto.php">Volver</a>
    </div>
<?php
    exit();
}

// Insertar comentario SIN imagen
$insertar = "INSERT INTO comentarios
(nombre, email, comentario)
VALUES 
('$nombre','$email','$comentario')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
?>
    <div class="card">
        <div class="icono success">✔</div>
        <h1>¡Comentario enviado!</h1>
        <p>Gracias por comunicarte con nosotros.</p>
        <a class="btn" href="../contacto.php">Enviar otro</a>
    </div>
<?php
} else {
    echo '<script>
    alert("Error en la BD: ' . mysqli_error($conectar) . '");
    </script>';
}
?>

</body>
</html>
