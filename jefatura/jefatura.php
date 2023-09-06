<!DOCTYPE html>
<html>
<head>
  <title>Jefatura</title>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

  <style>
  /* Estilos generales */
  body {
    font-family: Arial, sans-serif;

  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    justify-content: space-between;

  }

  .form-container {
    width: 45%;
    background-color: #431616;
    color: white;
    padding: 50px;
    font-size: 12px;
    border-radius: 10px; /* Agregado: establece el radio de las esquinas */
    margin-right: 5px;
  }

  .extra-column {
    width: 55%;
    color: black;
    padding: 50px;
    background-color: #a5a5a5;
    font-size: 12px;
    border-radius: 10px; /* Agregado: establece el radio de las esquinas */
  }
  .basis {
        display: flex;
        align-items: center;
      }

  input[type="text"]{
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  select {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="date"],
  input[type="time"]
  {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .button-gray {
    background-color: #ccc;
    color: #000;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  /* Estilos responsivos */
  @media only screen and (max-width: 800px) {
    .container {
      flex-direction: column;
    }

    .form-container,
    .extra-column {
      width: 100%;
      margin-right: 0;
    }
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
  }

  .close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }

  .ok {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px;
  background: linear-gradient(to right, #431616, #4E514F);
  border-radius: 50px;
  color: #fff;
  font-family: Arial, sans-serif;
  font-weight: bold;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  font-size: 12px;
  margin-top: 40px;
}

  .bad {
    text-align: center;
    padding: 12px;
    background-color: #431616;
    color: #fff;
  }
  .column1{
    width: 10%;
    padding: 5px;
      }
  .column2{
    width: 35%;
    padding: 5px;
      }
  .column3{
      padding-left: 10px;
      width: 55%;
      padding: 5px;
      }
    .column11{
     padding-left: 70px;
      }
  .column21{
     padding-left: 30px;
    width: 45%;

         }
  </style>
</head>
<body>
    <div class="basis">
      
    <div class="column11">
      <img src="../imagenes/image.png" style="width:180px;">

    </div>
    <div class="column21">
   <center>
   <h3>Documentos de la Jefatura de la GINP</h3>
  </center>
        </div>
    </div>
  <div class="container">
    <div class="form-container">
      <form method="POST">

        <label for="no_jefe">Número de Jef</label>
        <input type="text" name="no_jefe" >

        <label for="registra">Registra</label>
        <input type="text" name="registra" >

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" >

        <label for="area">Área</label>
        <input type="text" name="area" >

        <label for="ofi_Ginp">Ofic.GINP</label>
        <input type="text" name="ofi_GINP" >

        <label for="ofic_DIDT">Ofic.DIDT</label>
        <input type="text" name="ofi_DIDT" >
        <br><br><br><br>


<center>
              <button type="button" id="agregar" class="button-gray button-black-text">Agregar</button>
              <button type="button" id="cerrar" class="button-gray button-black-text" >Cerrar</button>
            </center>

    </div>
    <div class="extra-column">
      <label for="folio_GINP">Folio GINP</label>
      <input type="text" name="folio_GINP">

      <label for="ot_GINP">OT  GINP</label>
      <input type="text" name="ot_GINP">

      <label for="ot_DIDT">OT DIDT</label>
      <input type="text" name="ot_DIDT">

      <label for="asunto">Asunto</label>
      <textarea name="asunto" rows="4" cols="69"></textarea>

      <label for="observaciones">Observaciones</label>
      <textarea name="observaciones" rows="4" cols="69"></textarea>
      <center>
        <button type="submit" name="register" class="button-gray button-black-text"><i class="fas fa-save"></i>Guardar</button>  </center>
  </form>
    </div>
  </div>
  <?php
  include("registrar_jef.php");
  ?>
</body>
</html>
