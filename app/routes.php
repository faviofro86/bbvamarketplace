<?php

//Example of routes

//Ruta Inicial del Proyecto
Route::get('/','Home@index');

//Ruta asignada a controlador y funcion
Route::get('listado','Autos@listado');

//Ruta asignada a controlador y funcion
Route::get('marcas','Autos@marcas');

//Ruta para vista detalle de vehículo
Route::get('autos/{slug}','Autos@detalle');

//Ruta para cargar vista de registro de vehículo
Route::get('admin/auto_form','Autos@auto_form');

//Ruta para grabar datos de registro de vehículo
Route::post('admin/auto_registrar','Autos@auto_registrar');

//Ruta para acceder a la ficha técnica
Route::post('ficha/{slug}','Autos@ficha');

//Ruta asignada a controlador y funcion
Route::post('admin/poblarmodelo','Autos@poblarmodelo');

//Ruta para cargar vista de registro de Marca
Route::get('admin/marca_form','Autos@marca_form');

//Ruta para cargar vista de registro de Marca
Route::post('admin/marca_registrar','Autos@marca_registrar');

//Ruta para cargar vista de registro de Modelo
Route::get('admin/modelo_form','Autos@modelo_form');

//Ruta para cargar vista de registro de Modelo
Route::post('admin/modelo_registrar','Autos@modelo_registrar');

//Ruta para listar Marcas
Route::get('admin/listarmarcas','Autos@listar_marcas');

//Ruta para listar Marcas
Route::get('admin/modelos','Autos@listar_modelos');

//Ruta para cargar vista de registro de Banner
Route::get('admin/banner','Banners@banner_form');

//Ruta para cargar vista de registro de Banner
Route::get('admin/banners','Banners@listar');

//Ruta para cargar vista de registro de Banner
Route::post('admin/banner_add','Banners@banner_add');

//Ruta para listar Vehiculos
Route::post('admin/lvehiculos','Autos@vehiculos');

//Ruta para desactivar Marca
Route::get('admin/disablemarca','Autos@disablemarca');

//Ruta para activar Marca
Route::get('admin/enablemarca','Autos@enablemarca');

//Ruta para desactivar Banner
Route::get('admin/disablebanner','Banners@disable');

//Ruta para activar Banner
Route::get('admin/enablebanner','Banners@enable');

//Ruta para activar Modelo
Route::get('admin/enablemodelo','Autos@enablemodelo');

//Ruta para activar Modelo
Route::get('admin/disablemodelo','Autos@disablemodelo');

//Ruta para listar Categorías
Route::get('admin/categorias','Autos@listar_categorias');

//Ruta para listar Categorías
Route::get('admin/disablecategoria','Autos@disablecategoria');

//Ruta para listar Categorías
Route::get('admin/enablecategoria','Autos@enablecategoria');


/***************USUARIOS*****************/
Route::get('usuario/registrar_form','Usuario@registrar_form');
Route::post('usuario/registrar','Usuario@registrar');
Route::get('usuario/editar_form','Usuario@editar_form');
Route::post('usuario/editar','Usuario@editar');

Route::get('login','Usuario@login_view');
Route::post('login','Usuario@login');
Route::get('logout',function(){Auth::logout();Redirect::to('/'); });

/******MASIVO******/
Route::get('admin/masivo_form','Masivo@registrar_form');
Route::get('admin/masivo_listar','Masivo@listar');
Route::post('admin/masivo_registrar','Masivo@carga_masiva');




Route::get('decrypt',function(){


	$user = DB::getinstance()->table('usuarios')->where('correo','mjaguinagap@gmail.com')->where('password','NmFlc2JSZXE5Vks1Q0xzS1JmTlhRZz09')->first();
	Debug::varDump($user);


	$encode = Encrypter::encode('123');
	echo  $encode;
	echo "<br>";


	$encode = Encrypter::encode('123125|165145194323123');
	echo  $encode;
	echo "<br>";
	echo Encrypter::decode("S21VRlNyS3dqTXI2VWg1QzdCVUF3Zz09");

	$marcas = DB::getinstance()->table('usuarios')->where('estado','3')->get();
	Debug::varDump($marcas);
});



