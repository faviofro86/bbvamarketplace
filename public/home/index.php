<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?= HTML::style('css/bootstrap.min.css'); ?>
	<?= HTML::script('js/bootstrap.bundle.min.js'); ?>
	<title>Snipe</title>
</head>
<body>
	Bienvenidos a Snipe :)
	<?php var_dump($data); ?>
	<?= $data['data'][0]['traccion']; ?>
</body>
</html>