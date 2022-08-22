<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBVA Marketplace - Admin - Listado de Usuarios</title>

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
            <h1 class="m-0">Lista de Usuarios</h1>
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
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th style="width: 40px">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $data['usuarios'][0]['nombres']; ?></td>
                    <td><?php echo $data['usuarios'][0]['correo']; ?></td>
                    <td><?php echo $data['usuarios'][0]['telefono']; ?></td>
                    <td><?php if($data['usuarios'][0]['estado']=="1"){echo "Activado";}else{echo "Desactivado";} ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
            <div class="card">
            <div class="card-body p-0">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th style="width: 10px">#</th>
				  <th>Marcas asignadas</th>
				</tr>
			  </thead>
			  <tbody>
				<?php $x = 0; foreach($data['marca'] as $marca){ ?>
				<tr>
				  <td><?php echo $x=$x+1; ?></td>
				  <td><?php echo $marca['marca']; ?></td>
                  <td><a href="<?=URL::to('admin/permisos_eliminar?id='.$data['usuarios'][0]['id'].'&marca='.$marca['id_marca']); ?>" class='btn btn-danger'>Eliminar</a></td>
				</tr>
				<?php } ?>

			  </tbody>
			</table>
		  </div>
              <!-- /.card-body -->
            </div>
          <div class="card">
              <div class="card-body p-0">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Marcas por asignar</th>
                        </tr>
                      </thead>
                  </table>
                  <form action="<?=URL::to('admin/usuario_marca_registrar')?>" method="post">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="marca" required>
                                <option selected disabled hidden value="">Selecciona una Marca</option>
                                <?php foreach($data['marcas'] as $marca){ ?>
                                    <option value="<?php echo $marca->id; ?>"><?php echo $marca->marca; ?></option>
                                <?php } ?>
                                </select>
                                <input type="hidden" name="usuario" value="<?php echo $data['usuarios'][0]['id']; ?>">
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-primary">Agregar Marca</button>
                            </div>
                          </div>
                        </div>
                  </form>
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