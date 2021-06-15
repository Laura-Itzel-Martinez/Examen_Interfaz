<!doctype html>
<html lang="en">
  <head>
    <title>Control File</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--Mandamos llamar las dependencias-->
    <?php require_once "dependencias.php"?>
   
  </head>
  
  <body style="background: url('public/img/o.jpg') no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              background-size: cover;
              -o-background-size: cover;">

    <div class="container">
      <div class="row mt-4">
        <div class="col">   
          <div class="jumbotron">
            <h1 class="display-4">Administrador de archivos </h1>
            <hr>
            <div class="row">
              <div class="col">
                <label for="nombreArchivo">Nombre del archivo: </label>
                <input type="text" class="form-control" id="nombreArchivo" name="nombreArchivo">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <label for="categorias">Categorias: </label>
                <select name="" id="" class="form-control">
                  <option >Selecciona una categoria</option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <label for="subcategorias">Subcategorias:  </label>
                <select name="" id="" class="form-control">
                  <option >Selecciona una subcategorias: </option>
                  <option value=""></option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <form>
                  <div class="form-group">
                    <label for="subir">Selecciona un archivo de tu equipo </label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" class="form-control">
                  </div>
                </form>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col">
                <a class="btn btn-info" href="#" role="button">Agregar</a>
                <a class="btn btn-success" href="contenido.php" role="button">Mostrar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </body>
</html>