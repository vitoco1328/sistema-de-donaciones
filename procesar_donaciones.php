<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $monto = htmlspecialchars($_POST['monto']);

    // Validación básica
    if (!empty($nombre) && !empty($email) && !empty($monto)) {
        echo "<h1>Gracias, $nombre, por tu donación de $$monto.</h1>";
    } else {
        echo "<h1>Error: Todos los campos son obligatorios.</h1>";
    }
}
?>
