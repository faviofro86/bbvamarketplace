<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBVA Marketplace - Admin - Listado de Banners</title>

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
  
  <!-- Main Sidebar Container -->
  <?php	include 'sidebar.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de Banners</h1>
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
				  <th>Imagen</th>
				  <th>Título</th>
				  <th>Subtítulo</th>
				  <th>Botón 1</th>
				  <th>Destino 1</th>
				  <th>Botón 2</th>
				  <th>Destino 2</th>
				  <th>Ubicación</th>
				  <th>Acciones</th>
				  <th style="width: 40px">Estado</th>
				</tr>
			  </thead>
			  <tbody>
				<?php $x = 0; foreach($data['banners'] as $banner){ ?>
				<tr>
				  <td><?php echo $x=$x+1; ?></td>
				  <td><img src="<?=URL::to('public/banners/'.$banner->imagen);?>" width="100"></td>
				  <td><?php echo $banner->titulo; ?></td>
				  <td><?php echo $banner->subtitulo; ?></td>
				  <td><?php echo $banner->btn1; ?></td>
				  <td><?php echo $banner->url1; ?></td>
				  <td><?php echo $banner->btn2; ?></td>
				  <td><?php echo $banner->url2; ?></td>
				  <td><?php $r = ($banner->ubicacion=="1") ? 'Superior' : 'Lateral'; echo $r; ?></td>
				  <td>
				  <?php if($banner->estado=="1"){
					echo "<a href='".URL::to('admin/disablebanner?id='.$banner->id)."' class='btn btn-danger'>Desactivar</a>";
					}else{
					echo "<a href='".URL::to('admin/enablebanner?id='.$banner->id)."' class='btn btn-primary'>Activar</a>";}
					?>
				  </td>
				  <td><?php $r = ($banner->estado=="1") ? 'Activado' : 'Desactivado'; echo $r; ?></td>
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