
<?php
include("con_db.php");

// Consulta para obtener los últimos registros de la tabla
$sql = "SELECT * FROM tabla_ingresocdt ORDER BY CDT_num DESC LIMIT 5";
$result = $conex->query($sql);

// Verificar si se obtuvieron registros
if ($result->num_rows > 0) {
    $registros = array(); // Array para almacenar los registros

    while ($row = $result->fetch_assoc()) {
        $registro = array(
            "registro1" => $row["CDT_num"],
            "registro2" => $row["nom_recibe"],
            "registro3" => $row["fecha_recibo_cdt"]
        );
        $registros[] = $registro;
    }

    echo json_encode($registros); // Devolver los registros como cadena JSON
} else {
    echo json_encode("No se encontraron registros.");
}

// Cerrar la conexión
$conex->close();
?>
