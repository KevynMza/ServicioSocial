<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <title>Formulario de Registro de CDT</title>
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
    width: 65%;
    background-color: #431616;
    color: white;
    padding: 30px;
    font-size: 12px;
    border-radius: 10px; /* Agregado: establece el radio de las esquinas */
    margin-right: 5px;
  }

  .extra-column {
    width: 35%;
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
    width: 93%;
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
    
    width: 45%;

         }
   .margen{
    width: 8%;
   
          
   
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
    <h3>Coordinación de Desarrollo Tecnológico</h3>
    <h4>(Oficios por firma)</h4>
  </center>
        </div>
    </div>
   

  <div class="container">
  <div class="form-container">
  <form method="POST">
  <div class="basis">
    <div class="column1">
      <label for="numeroCDT">Numero de CDT</label>
    </div>
    <div class="column2">
    <input type="text" name="numero" id="campo1" >
    </div>
    <div class="column3">

      <button type="button" name="Modificar" class="button-gray button-black-text" onclick="visualizarRegistros()">
  <i class="fas fa-pencil-alt"></i> Modificar
</button>

<script>
   function visualizarRegistros() {
     fetch('../conexion/visualizar.php')
       .then(response => response.json())
       .then(data => {
         if (data.length > 0) {
           document.getElementById("campo1").value = data[0].registro1;
           document.getElementById("campo2").value = data[0].registro2;
           document.getElementById("campo3").value = data[0].registro3;
         } else {
           console.log("No se encontraron registros.");
         }
       })
       .catch(error => {
         console.error('Error:', error);
       });
   }
 </script>

    </div>
  </div>

    <div class="basis">
      <div class="column1">
        <label for="recibe">Recibe</label>
      </div>
      <div class="column2">
         <select name="recibe" id="campo2">
           <?php
             // Conexión a la base de datos
             include("../conexion/con_db.php");

             // Configurar la codificación de caracteres
             header('Content-Type: text/html; charset=utf-8');

             // Establecer la codificación de caracteres para la conexión
             $conex->set_charset("utf8");

             // Consulta para obtener los datos
             $sql = "SELECT dirigido FROM dirigido";
             $result = $conex->query($sql);

             // Generar las opciones del select
             if ($result->num_rows > 0) {

               while($row = $result->fetch_assoc()) {
                 $dirigido = $row["dirigido"]; // No es necesario utilizar utf8_encode() aquí

                 // Mostrar las opciones del select sin codificación adicional
                 echo "<option value='" . $dirigido . "'>" . $dirigido . "</option>";
               }
             } else {
               echo "<option value=''>No hay datos disponibles</option>";
             }

             // Cerrar la conexión
             $conex->close();
           ?>

      </select>
      </div>
      <div class="column3">
        <button type="button" id="agregarPersona" name="agregar" class="button-gray button-black-text">
        <i class="fas fa-user-plus"></i> Agregar Persona
      </button>
      <button type="button" id="cerrarAgregarPersona" name="cerrar" style="display: none;">
        <i class="fas fa-times"></i> Cerrar
      </button>
      </div>
    </div>
        <div class="basis">
            <div class="column2">
              <label for="fechaRecibido">Fecha de Recibido</label>
              <input type="date" name="fechaRecibido" id="campo3">
            </div>
            <div class="column3">
              <label for="horaRecibido">Hora de Recibido</label>
              <input type="time" name="horaRecibido">
            </div>
              </div>

              <div class="colum2">
                <label for="observaciones">Observaciones</label><br>
                <textarea name="observaciones" rows="4" cols="60"></textarea>
              </div>

        <hr>
            <div class="basis">
            <div class="column2">
              <label for="fechaCorrecion">Fecha de Corrección</label>
              <input type="date" name="fechaCorrecion">
            </div>
            <div class="column3">
              <label for="fechaRegreso">Fecha de Regreso</label>
              <input type="date" name="fechaRegreso">
            </div>
            </div>

            <div class="basis">
            <div class="column2">
              <label for="horaCorrecion">Hora de Corrección</label>
              <input type="time" name="horaCorrecion">
            </div>
            <div class="column3">
              <label for="horaRegreso">Hora de Regreso</label>
              <input type="time" name="horaRegreso">
            </div>
            </div>


      </div>
      <div class="extra-column">
        <label for="folioGINP">Folio GINP</label>
        <input type="text" name="folioGINP">
        <br><br>

        <label for="otGINP">OT GINP</label>
        <input type="text" name="otGINP">
        <br><br>

        <label for="otDIDT">OT DIDT</label>
        <input type="text" name="otDIDT">

        <br><br>
        <center>
        <button type="submit" name="register"  id="guardarBtn" class="button-gray button-black-text">
          <i class="fas fa-save"></i> Guardar
        </button>
      </center>

      </div>
    </div>
  </form>

  <div id="agregarPersonaModal" class="modal">
    <div class="modal-content">
      <span class="close-button close-button-agregar-persona">&times;</span>
      <h2>Agrega Persona</h2>
      <form id="agregarPersonaForm">
        <label for="nombrePersona">Nombre:</label>
        <input type="text" id="nombrePersona" required><br><br>
        <label for="apellidoPersona">Apellido:</label>
        <input type="text" id="apellidoPersona" required><br><br>
        <input type="submit" value="Agregar">
      </form>
    </div>
  </div>

  <?php
  include("registrar.php");
  ?>
  <script src="CDT.js"></script>
</body>
</html>
