<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBVA Marketplace - Admin - Registro de Usuarios</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=URL::to('public/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL::to('public/css/adminlte/adminlte.min.css')?>">
  
</head>

<!--
   Required meta tags
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    Bootstrap CSS
    <link rel="stylesheet" href="<?=URL::to('public/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=URL::to('public/css/slick-theme.css')?>" />
    <link rel="stylesheet" href="<?=URL::to('public/css/style.css')?>">

    <title>BBVA Marketplace - Admin - Registro de Usuarios</title>-->

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Main Sidebar Container -->
  <?php	include 'sidebar.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de Usuarios</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card card-default">
         
          <!-- /.card-header -->
          <form id="registro_usuario">
              <div class="card-body">
                  <div class="form-group">
                      <label class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="nombre" id="nombre">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Número de documento</label>
                      <input type="text" class="form-control" name="dni" id="dni">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Teléfono</label>
                      <input type="text" class="form-control" name="telefono" id="telefono">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Correo</label>
                      <input type="email" class="form-control" name="correo" id="correo">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="pass" id="pass">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Repetir contraseña</label>
                      <input type="password" class="form-control" name="verificacion" id="verificacion">
                  </div>
                  <div class="form-group">
                      <label class="form-label">Tipo de usuario</label>
                      <select name="tipo" id="tipo">
                          <option value="2">Administrador</option>
                          <option value="3">Consecionario</option>
                      </select>
                  </div>
                   <button class="btn-g mx-auto" type="submit">Registrar</button>
              </div>


            
          </form>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
  
        
	  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?=URL::to('public/js/jquery.slim.min.js')?>"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('dni').addEventListener('input', function() {
                if (this.value.length > 8) this.value = this.value.slice(0, 8);
            })
            $("#registro_usuario").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: "POST",
                    url: Script.route('admin/usuario_registrar'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.status == 200) {
                            Swal.fire(
                                'Ok!',
                                response.message,
                                'success'
                            ).then(function() {
                                window.location = Script.route('admin/usuario_crear')
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                response.message,
                                'warning'
                            )
                        }
                    },
                    error: function(jqXHR, status) {
                        Swal.fire(
                            'Error!',
                            'se ha producido un error',
                            'warning'
                        )
                        console.log(jqXHR);
                    }
                }).done(function(data) {
                    console.log(data);
                    console.log('fin');
                });

            });

        });

    </script>

    

<!-- AdminLTE App -->
<script src="<?=URL::to('public/js/adminlte.min.js')?>"></script>
    
  </body>
</html>