<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BBVA Marketplace - Admin - Listado de carga masiva</title>

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
            <h1 class="m-0">Lista de cargas masivas</h1>
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
            <th>Marca</th>
            <th>Usuario</th>
            <th>Registros procesados</th>
            <th>Registros fallidos</th>
            <th>Registros Correctos</th>
            <th>Detalle de proceso</th>
            <th>Archivo cargado</th>
            <th>Fecha y Hora de registro</th>
            <th>Fecha y Hora de inicio</th>
            <th>Fecha y Hora de fin</th>
            <th>Estado</th>
          </tr>
			  </thead>
			  <tbody>
          <?php $x = 0; foreach($data['masivo'] as $masivo){ ?>
          <tr>
            <td><?=$x=$x+1; ?></td>
            <td><?=$marcas[$masivo->id_marca]->marca; ?></td>
            <td><?=$usuarios[$masivo->id_usuario]->nombres.' '. $usuarios[$masivo->id_usuario]->apellidos; ?></td>
            <td><?=$masivo->registros_procesados; ?></td>
            <td><?=$masivo->registros_fallidos; ?></td>
            <td><?=$masivo->registros_correctos; ?></td>
            <td><a target="_blank" href="<?=URL::to('public/').$masivo->archivo_detalle; ?>">Descargar</a></td>
            <td><a target="_blank" href="<?=URL::to('public/').$masivo->archivo_cargado; ?>">Descargar</a></td>
            <td><?=$masivo->fecha_hora_registro;?></td>
            <td><?=$masivo->fecha_hora_inicio;?></td>
            <td><?=$masivo->fecha_hora_fin;?></td>
            <td><?php 
              switch($masivo->estado){
                case 0: echo "En proceso";break;
                case 1: echo "Terminado";break;
                case 2: echo "Zip no legible";break;
                case 3: echo "Archivo no cargado";break;
              }
            ?></td>
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