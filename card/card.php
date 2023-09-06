<!DOCTYPE html>
<html>
<head>
  <title>Card</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .custom-header {
      background-color: #431616;
      color: white;
    }
    .card {
      margin-top: 20px;
    }
    .card-body {
      padding: 20px;
    }
    .card-text {
      margin-bottom: 10px;
    }
    .dropdown {
      margin-bottom: 20px;
    }
    .modal-body {
      min-height: 100vh;
      padding: 0;
    }
    .modal-iframe {
      width: 100%;
      height: 500px;
      border: none;
    }
    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 900px;
        margin: 1.75rem auto;
      }
      .modal-iframe {
        height: 600px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h5 class="card-header custom-header">Card</h5>
      <div class="card-body">
        <h4 class="card-title">Documentos </h4>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Opciones
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="" data-file="../cdt/cdt.php"><i class="fas fa-file-alt"></i> CDT</a>
            <a class="dropdown-item" href="#" data-file="../jefatura/jefatura.php"><i class="fas fa-file-alt"></i> JEFATURA</a>
            <a class="dropdown-item" href="#" data-file="../cac/cac.php"><i class="fas fa-file-alt"></i> CAC</a>
            <a class="dropdown-item" href="" data-file="../didt/didt.php"><i class="fas fa-file-alt"></i> DIDT</a>
            <a class="dropdown-item" href="#" data-file="../ginp/ginp.php"><i class="fas fa-file-alt"></i> GINP</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Agrega el modal -->
  <div class="modal fade" id="contentModal" tabindex="-1" role="dialog" aria-labelledby="contentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contentModalLabel">Contenido del Modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <iframe id="iframeContent" class="modal-iframe" style="width: 100%; height: 100vh; border: none;"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Agrega los scripts de Bootstrap y jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.dropdown-item').click(function(e) {
        e.preventDefault();
        var file = $(this).data('file');
        $('#iframeContent').attr('src', file);
        $('#contentModal').modal('show');
      });

      $('#contentModal').on('shown.bs.modal', function() {
        var iframe = document.getElementById('iframeContent');
        iframe.onload = function() {
          var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
          var iframeHeight = iframeDocument.documentElement.scrollHeight + 'px';
          $('.modal-dialog').css('height', 'auto'); // Restablece la altura a 'auto' antes de calcular
          $('.modal-body').css('height', iframeHeight); // Establece la altura del modal-body
        };
      });
    });
  </script>
</body>
</html>
