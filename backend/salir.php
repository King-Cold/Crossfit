<?php
session_start();
session_destroy();
  echo '
    <script>
    alert("Saliste del sistema");
    location.href = "../login.php"
  </script>';
?>

