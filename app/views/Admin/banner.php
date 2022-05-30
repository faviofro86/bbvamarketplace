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

    <title>BBVA Marketplace - Admin - Registro de Banners</title>
  </head>
  <body>    
	  <div class="container-fluid">
		  <div class="container">
		  <?php //var_dump($data); ?>
		  <h1>BBVA Marketplace</h1>
		  <h2>Agrega un Banner</h2>
		  	<form action="<?=URL::to('admin/banner_add')?>" method="post" enctype="multipart/form-data">
			  <div class="mb-3">
				<label class="form-label">Ubicación</label>
				<select class="form-control" name="ubicacion" required>
				<option selected disabled hidden value="">Selecciona una ubicación</option>
				<?php foreach($data['ubicaciones'] as $ubicacion){ ?>
					<option value="<?php echo $ubicacion->id; ?>"><?php echo $ubicacion->ubicacion; ?></option>
				<?php } ?>
				</select>
			  </div>
			  <div class="mb-3">
				<label class="form-label">Imágen</label>
				<input type="file" class="form-control" name="banner">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Título</label>
				<input type="text" class="form-control" name="titulo">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Subtítulo</label>
				<input type="text" class="form-control" name="subtitulo">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Botón 1</label>
				<input type="text" class="form-control" name="btn1">
			  </div>
			  <div class="mb-3">
				<label class="form-label">URL 1</label>
				<input type="text" class="form-control" name="url1">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Botón 2</label>
				<input type="text" class="form-control" name="btn2">
			  </div>
			  <div class="mb-3">
				<label class="form-label">URL 2</label>
				<input type="text" class="form-control" name="url2">
			  </div>
			  <div class="mb-3">
				<label class="form-label">Estado</label>
				<input type="text" class="form-control" name="estado">
			  </div>

			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		  </div>
	  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?=URL::to('public/js/jquery.slim.min.js')?>"></script>
    <script src="<?=URL::to('public/js/bootstrap.bundle.min.js')?>"></script>
    
  </body>
</html>