<?php

include("../conexion/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['ginp']) >= 1 && strlen($_POST['respuesta']) >= 1) {
	    $ginp = trim($_POST['ginp']);
      $solicita = trim($_POST['solicita']);
      $captura = trim($_POST['captura']);
      $respuesta = trim($_POST['respuesta']);
      $asuntos = trim($_POST['asuntos']);
      $area = trim($_POST['area']);
      $numero = trim($_POST['numero']);
      $dirigido = trim($_POST['dirigido']);
      $asunto = trim($_POST['asunto']);
      $folioGINP = trim($_POST['folioGINP']);
      $otGINP = trim($_POST['otGINP']);
      $fecha = trim($_POST['fecha']);


	    $consulta = "INSERT INTO ginp(GINP, N_Registra, N_Solicita, Coord, Numero,
      Fecha_ginp, Destinatario, RespuestaOficio, Asunto, Asunto2, Folio_ginp, OT)
      VALUES ('$ginp','$captura','$solicita','$area','$numero','$fecha','$dirigido',
      '$respuesta','$asunto','$asuntos','$folioGINP','$otGINP')";


	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Formulario enviado!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
