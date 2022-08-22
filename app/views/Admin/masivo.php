<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBVA Marketplace - Admin - Registro de Autos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=URL::to('public/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL::to('public/css/adminlte/adminlte.min.css')?>">
</head>

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
            <h1 class="m-0">Registro Masivo</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
		    <div class="col-lg-6">
            <div class="card">
             <form action="<?=URL::to('admin/masivo_registrar')?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
				        <div class="form-group">
                  <label class="form-label">Marca</label>
                  <select class="form-control" name="marca" required id="marca">
                    <option selected disabled hidden value="">Selecciona una marca</option>
                    <?php foreach($data['marcas'] as $marca){ ?>
                      <option value="<?php echo $marca->id; ?>"><?php echo $marca->marca; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-label">zip masivo</label>
                  <input type="file" class="form-control" name="archivzip" accept=".zip">
                </div>
                
                <div class="form-group"><br>
					      <button type="submit" class="btn btn-primary">Registrar</button>
                </div>                
              </div>
			      </form>
            </div>
          </div>
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
   

    <!-- AdminLTE App -->
    <script src="<?=URL::to('public/js/adminlte.min.js')?>"></script>
    
  </body>
</html>