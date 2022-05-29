<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=URL::to('public/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=URL::to('public/css/slick-theme.css')?>" />
    <link rel="stylesheet" href="<?=URL::to('public/css/style.css')?>">

    <title>BBVA Marketplace - Admin - Registro de Modelo</title>
  </head>
  <body>    
	  <div class="container-fluid">
		  <div class="container">
		  <?php //var_dump($data); ?>
		  <h1>BBVA Marketplace</h1>
		  <h2>Registro de Modelo</h2>
		  	<form action="<?=URL::to('admin/modelo_registrar')?>" method="post">
			  <div class="mb-3">
				<label class="form-label">Modelo</label>
				<select class="form-control" name="marca" required>
				<option selected disabled hidden value="">Selecciona una marca</option>
				<?php foreach($data['marcas'] as $marca){ ?>
					<option value="<?php echo $marca->id; ?>"><?php echo $marca->marca; ?></option>
				<?php } ?>
				</select>
			  </div>
			  <div class="mb-3">
				<label class="form-label">Modelo</label>
				<input type="text" class="form-control" name="modelo">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Estado</label>
				<select class="form-control" name="estado" required>
				<option selected disabled hidden value="">Selecciona una opción</option>
				<option value="1">Activado</option>
				<option value="0">Desactivado</option>
				</select>
			  </div>

			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		  </div>
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
        
  </body>
</html>