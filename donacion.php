<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "ORGANIZACION");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Insertar 10 donaciones
for ($i = 1; $i <= 10; $i++) {
    $monto = rand(100, 1000);  // Monto aleatorio entre 100 y 1000
    $fecha = date('Y-m-d', strtotime("-$i days"));
    $id_proyecto = rand(1, 3); // Suponiendo que hay 3 proyectos
    $id_donante = rand(1, 3);  // Suponiendo que hay 3 donantes

    $sql = "INSERT INTO DONACION (monto, fecha, id_proyecto, id_donante)
            VALUES ('$monto', '$fecha', '$id_proyecto', '$id_donante')";

    if ($conn->query($sql) === TRUE) {
        echo "Donación $i registrada correctamente.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
