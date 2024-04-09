<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->

    <link href="DataTables/datatables.min.css" rel="stylesheet">
 
    <script src="DataTables/datatables.min.js"></script>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">-->
    <link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>CRUD con PHP, PDO Ajax y Datatables</title>
  </head>
  <body>
    <div class="container fondo">
        <h1 class="text-center">CRUD con PHP, PDO Ajax y Datatables</h1>
        <h1 class="text-center">ServiciosIKEO.com</h1>

        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                    <i class="bi bi-plus-circle-fill"></i>
                     Crear
                </button>       

                </div>

            </div>

        </div>
        <br>
        <div class="table-resposive">
            <table id="datos_usuario" class="table table-bodered  table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Imagen</th>
                        <th>Fecha Creación</th>
                        <th>Editar</th>
                        <th>Borrar</th>

                    </tr>
                </thead>

            </table>

        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalUsuario">Crear Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <form method="POST" id="formulario" enctype="multipart/form-data" action="">
            <div class="modal-content">
            <div class="modal-body">
                <label for="nombre">Ingrese nombres</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <br>
                <label for="apellidos">Ingrese apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control">
                <br>
                <label for="telefono">Ingrese teléfono</label>
                <input type="number" name="telefono" id="telefono" class="form-control">
                <br>
                <label for="nombre">Ingrese Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <br>
                <label for="imagen">Selecione una imagen</label>
                <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                <br>
                <span id="imagen-subida"></span>

            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_usuario" id="id_usuario">
                <input type="hidden" name="operacion" id="operacion">
                <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                
               
            </div>
            </div>
        </form>
      
      
    </div>
  </div>
</div>

    <script src="/jq/jquery-3.7.1.min.js"></script>


    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>