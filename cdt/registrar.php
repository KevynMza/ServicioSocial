<?php

include("../conexion/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['numero']) >= 1 && strlen($_POST['recibe']) >= 1) {
	    $numero = trim($_POST['numero']);
	    $recibe = trim($_POST['recibe']);
      $fechaRecibido = trim($_POST['fechaRecibido']);
      $horaRecibido = trim($_POST['horaRecibido']);
      $observaciones = trim($_POST['observaciones']);
      $fechaCorrecion = trim($_POST['fechaCorrecion']);
      $fechaRegreso = trim($_POST['fechaRegreso']);
      $horaCorrecion = trim($_POST['horaCorrecion']);
      $horaRegreso = trim($_POST['horaRegreso']);
      $folioGINP = trim($_POST['folioGINP']);
      $otGINP = trim($_POST['otGINP']);
      $otDIDT = trim($_POST['otDIDT']);


	    $consulta = "INSERT INTO tabla_ingresocdt(CDT_num, nom_recibe, fecha_recibo_cdt, hora_recibo_cdt, OT_ginp,
        OT_didt, Observaciones, Fecha_correccion_cdt, Hora_correccion_cdt, fecha_regreseo_cdt, hora_regreso_cdt, Folio_GINP)
      VALUES ('$numero','$recibe','$fechaRecibido','$horaRecibido','$otGINP','$otDIDT','$observaciones','$fechaCorrecion','$horaCorrecion',
        '$fechaRegreso','$horaRegreso','$folioGINP')";
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
