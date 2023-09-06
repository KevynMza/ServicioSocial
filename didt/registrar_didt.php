<?php

include("../conexion/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['didt']) >= 1 && strlen($_POST['captura']) >= 1) {
	    $didt = trim($_POST['didt']);
      $captura = trim($_POST['captura']);
      $fechaCorrecion = trim($_POST['fechaCorrecion']);
      $horaCorrecion = trim($_POST['horaCorrecion']);
      $area = trim($_POST['area']);
      $numero = trim($_POST['numero']);
      $asunto = trim($_POST['asunto']);
      $folioGINP = trim($_POST['folioGINP']);
      $otGINP = trim($_POST['otGINP']);
      $otDIDT = trim($_POST['otDIDT']);
      $fecha = trim($_POST['fecha']);
      $hora = trim($_POST['hora']);


	    $consulta = "INSERT INTO didt(DIDT, N_Captura, Fecha_didt, Hora_didt, Coord,
      Numero, Asunto, Folio_ginp, OT, OT_didt,Fecha_correciondidt, Hora_correcciondidt)
      VALUES ('$didt','$captura','$fecha','$hora','$area','$numero','$asunto','$folioGINP',
      '$otGINP','$otDIDT','$fechaCorrecion','$horaCorrecion')";


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
