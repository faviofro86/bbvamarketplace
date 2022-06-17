<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBVA Marketplace - Admin - Listado de Marcas</title>

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

    <title>BBVA Marketplace - Admin - Registro de Autos</title>-->

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  
  <!-- Main Sidebar Container -->
  <?php	include 'sidebar.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de Marcas</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
		  <div class="card-body p-0">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th style="width: 10px">#</th>
				  <th>Marcas</th>
				  <th>Acciones</th>
				  <th style="width: 40px">Estado</th>
				</tr>
			  </thead>
			  <tbody>
				<?php $x = 0; foreach($data['marcas'] as $marcas){ ?>
				<tr>
				  <td><?php echo $x=$x+1; ?></td>
				  <td><?php echo $marcas->marca; ?></td>
				  <td>
				  <?php if($marcas->estado=="1"){
					echo "<a href='".URL::to('admin/disablemarca?id='.$marcas->id)."' class='btn btn-danger'>Desactivar</a>";
					}else{
					echo "<a href='".URL::to('admin/enablemarca?id='.$marcas->id)."' class='btn btn-primary'>Activar</a>";}
					?>
				  </td>
				  <td><?php if($marcas->estado=="1"){echo "Activada";}else{echo "Desactivada";} ?></td>
				</tr>
				<?php } ?>

			  </tbody>
			</table>
		  </div>
              <!-- /.card-body -->
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
    <script>
        var campos_max = 6;
        var x = 1;
        $('#add-img').click(function (e) {
            e.preventDefault();
            if (x < campos_max) {
				$('#cantidad').val(x+1);
                $('.imagenes').append(`<div class="d-flex"><input class="form-control banner` + (x+1) +`" type="file" name="banner` + (x+1) +`"></div>`)
                x++;
            } else {
                alert("Límite de imagenes alcanzado")
            }
			if(x<1){
				$('#delete-img').addClass("d-none");
			}
		});

        $('.imagenes').on("click", "#delete-img", function (e) {
            e.preventDefault();
            $('.banner' + (x)).parent('div').remove();
            x--;
			if(x==0){x=1;}
			$('#cantidad').val(x);
        });	
    </script>


<!-- AdminLTE App -->
<script src="<?=URL::to('public/js/adminlte.min.js')?>"></script>
    
  </body>
</html>