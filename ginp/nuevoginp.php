<?php
include("../conexion/con_db.php");

$sql = "SELECT * FROM ginp ORDER BY ginp DESC LIMIT 1";
$result = $conex->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ultimoRegistro = $row['ginp'];
} else {
    $ultimoRegistro = "No se encontraron registros";
}

// Actualizar el campo de texto
if (isset($_POST['buttonGenerar'])) {
    $nuevoValor = $ultimoRegistro; // El valor obtenido de la consulta
    $sqlUpdate = "UPDATE ginp SET ginp = '$nuevoValor' WHERE id = 1"; // Cambia 'tabla' y 'campo' según tus necesidades
    if ($conex->query($sqlUpdate) === TRUE) {
        echo "Campo actualizado correctamente.";
    } else {
        echo "Error al actualizar el campo: " . $conex->error;
    }
}

$conex->close();
?>