<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro de CDT</title>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

     <style>
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
     padding: 30px;
     font-size: 12px;
     border-radius: 10px; /* Agregado: establece el radio de las esquinas */
     margin-right: 5px;
   }

   .extra-column {
     width: 55%;
     color: black;
     padding: 30px;
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
     height: 50%;
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
     width: 50%;
     padding: 5px;
     margin-right: 5px;
     margin-left: 40px;
       }
   .column2{
     width: 50%;
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
    <h3>Registro de Oficios de Respuesta de la DIDT</h3>
  </center>
        </div>
    </div>
  <div class="container">
    <div class="form-container">
      <form method="post">
        <label for="didt">DIDT/</label>
        <input type="text" name="didt" style="width:60px";>
        <label for="numero">/2023</label>

        <label for="captura">Captura</label>
        <select name="captura">
          <option value="persona1">Persona 1</option>
          <option value="persona2">Persona 2</option>
          <option value="persona3">Persona 3</option>
        </select>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha">

        <label for="hora">Hora</label>
       <input type="time" name="hora">

        <label for="area">Coord/Area&nbsp;</label>
        <select name="area">
          <option value="Area1">Area 1 </option>
          <option value="Area2">Area 2</option>
          <option value="Area3">Area 3</option>
        </select>

        <label for="numero">Numero</label>
        <input type="text" name="numero">

        <label for="fechaCorrecion">Fecha de Corrección</label>
        <input type="date" name="fechaCorrecion">

        <label for="horaCorrecion">Hora de Corrección&nbsp;</label>
        <input type="time" name="horaCorrecion">

        <div class="basis">
        <div class="column1">
          <label for="didtEntregado">DIDT Entregado</label>
        </div>
        <div class="column2">
        <button type="button" name="buttonGenerar" class="button-gray button-black-text">Generar</button>
        </div>
      </div>

        <input type="text" name="didtEntregado">


    </div>
    <div class="extra-column">

      <label for="folioGINP">Folio GINP</label>
      <input type="text" name="folioGINP">

      <label for="otGINP">OT GINP</label>
      <input type="text" name="otGINP">

      <label for="otDIDT">OT DIDT</label>
      <input type="text" name="otDIDT">

      <label for="asunto">Asunto</label>
        <textarea name="asunto" rows="10" cols="69"></textarea>
        <br><br>
        <center>
        <button type="button" name="buttonAgregar" class="button-gray button-black-text">Agregar Nuevo GINP</button>
        <button type="submit" name="register" class="button-gray button-black-text"><i class="fas fa-save"></i>Guardar</button>
        <button type="button" name="buttonCerrar" class="button-gray button-black-text">Cerrar</button>
      </center>
          </form>
    </div>
  </div>
  <?php
  include("registrar_didt.php");
  ?>

</body>
</html>
