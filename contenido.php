<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Mandamos llamar las dependencias-->
    <?php require_once "dependencias.php"?>

  </head>
  <body style="background: url('public/img/l.jpg') no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              background-size: cover;
              -o-background-size: cover;">

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Archivos encontrados</h1>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-condensed" id="tablaCategoriasDT">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Subcategoria</th>
                                            <th>Archivo</th>
                                            <th>Descargar</th>
                                            <th>Abrir</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td><span class="btn btn-info">Descargar</span></td>
                                        <td><span class="btn btn-success">Abrir Archivo</span></td>
                                        <td><span class="btn btn-danger" onclick="eliminarArchivo()">Eliminar</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   



  </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCategoriasDT').DataTable();
	});
</script>