<?php

include("../conexion/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['no_jefe']) >= 1 && strlen($_POST['registra']) >= 1) {
	    $no_jefe = trim($_POST['no_jefe']);
	    $registra = trim($_POST['registra']);
      $fecha = trim($_POST['fecha']);
      $area = trim($_POST['area']);
      $ofi_GINP = trim($_POST['ofi_GINP']);
      $ofi_DIDT = trim($_POST['ofi_DIDT']);
      $folio_GINP = trim($_POST['folio_GINP']);
      $ot_GINP = trim($_POST['ot_GINP']);
      $ot_DIDT = trim($_POST['ot_DIDT']);
      $asunto = trim($_POST['asunto']);
      $observaciones = trim($_POST['observaciones']);


	    $consulta = "INSERT INTO tabla_ingresojef(Num_JEF, Registra, GINP, DIDT, Fecha, Area, Folio, OTginp, OTdidt,
         Asunto, Observaciones)VALUES ('$no_jefe','$registra','$ofi_GINP','$ofi_DIDT','$fecha','$area','$folio_GINP'
           ,'$ot_GINP','$ot_DIDT','$asunto','$observaciones')";
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
