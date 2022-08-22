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
            <h1 class="m-0">Registro de Marca</h1>
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
             <form action="<?=URL::to('admin/marca_editar')?>" method="post">
              <div class="card-body">
				<div class="form-group">
                  	<label class="form-label">Marca</label>
					<input type="text" class="form-control" name="marca" value="<?php echo $data['marcas'][0]->marca; ?>">
                </div>
                <div class="form-group">
                  	<label class="form-label">Imágen actual</label>
					<img src="<?=URL::to('public/img/marcas/'.$data['marcas'][0]->imagen);?>" width="100">
                </div>
                  
                <div class="form-group">
                  	<label class="form-label">Imágen nueva</label><br>
					<input type="file" class="form-control" name="logo">
                </div>
                <div class="form-group"><br>
                    <input type="hidden" name="id" value="<?php echo $data['marcas'][0]->id; ?>">
					<button type="submit" class="btn btn-primary">Grabar Edición</button>
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
    <script>
	function load(str){
	  var xmlhttp;
	  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  }
	  else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
		  document.getElementById("modelo").innerHTML=xmlhttp.responseText;
		}
	  }
	  xmlhttp.open("POST","<?=URL::to('admin/poblarmodelo')?>",true);
	  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	  xmlhttp.send("q="+str);
	}  
	</script>

   

<!-- AdminLTE App -->
<script src="<?=URL::to('public/js/adminlte.min.js')?>"></script>
    
  </body>
</html>