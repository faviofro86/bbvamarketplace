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

    <title>BBVA Marketplace - Admin - Registro de Autos</title>
  </head>
  <body>    
	  <div class="container-fluid">
		  <div class="container">
		  <?php var_dump($data); ?>
		  <h1>BBVA Marketplace</h1>
		  <h2>Registro de vehículo</h2>
		  	<form action="<?=URL::to('admin/auto_registrar')?>" method="post">
			  <div class="mb-3">
				<label class="form-label">Marca</label>
				<select class="form-control" name="marca" required onchange="load(this.value)">
				<option selected disabled hidden value="">Selecciona una marca</option>
				<?php foreach($data['marcas'] as $marca){ ?>
					<option value="<?php echo $marca->id; ?>"><?php echo $marca->marca; ?></option>
				<?php } ?>
				</select>
			  </div>
			  <div class="mb-3" id="modelo">
				<label class="form-label">Modelo</label>
				<input type="text" class="form-control" name="modelo" id="modelo" disabled>
			  </div>
			  <div class="mb-3">
				<label class="form-label">Categoria</label>
				<select class="form-control" name="categoria" required>
				<option selected disabled hidden value="">Selecciona una categoría</option>
				<?php foreach($data['categorias'] as $categorias){ ?>
					<option value="<?php echo $categorias->id; ?>"><?php echo $categorias->categoria; ?></option>
				<?php } ?>
				</select>
			  </div>
			  <div class="mb-3">
				<label class="form-label">Condición</label>
				<select class="form-control" name="condicion" required>
				<option selected disabled hidden value="">Selecciona una condición</option>
				<?php foreach($data['condicion'] as $condicion){ ?>
					<option value="<?php echo $condicion->id; ?>"><?php echo $condicion->condicion; ?></option>
				<?php } ?>
				</select>
			  </div>
			  <div class="mb-3">
				<label class="form-label">Precio</label>
				<input type="text" class="form-control" name="precio">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Banner central</label>
				<input type="text" class="form-control" name="banner">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Modelo Año</label>
				<input type="text" class="form-control" name="ano_modelo">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Año Fabricación</label>
				<input type="text" class="form-control" name="ano_fabricacion">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Cilindrada</label>
				<input type="text" class="form-control" name="cilindrada">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Puertas</label>
				<input type="text" class="form-control" name="puertas">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Transmisión</label>
				<input type="text" class="form-control" name="transmision">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Tracción</label>
				<input type="text" class="form-control" name="traccion">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Descripción</label>
				<input type="text" class="form-control" name="descripcion">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Resumen</label>
				<input type="text" class="form-control" name="resumen">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Ficha Técnica</label>
				<input type="text" class="form-control" name="ficha">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Encuentralo en</label>
				<input type="text" class="form-control" name="encuentralo">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Estado</label>
				<input type="text" class="form-control" name="estado">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Slug</label>
				<input type="text" class="form-control" name="slug">
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