<?php

//Example of routes

//Ruta Inicial del Proyecto
Route::get('/','Home@index');

//Ruta asignada a controlador y funcion
Route::get('detalle','Home@detalle');

//Ruta asignada a controlador y funcion
Route::get('listado','Home@listado');

//Ruta asignada a controlador y funcion
Route::get('marcas','Home@marcas');

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

//Ruta para cargar vista de registro de marca
Route::get('admin/marca_form','Autos@marca_form');

//Ruta para cargar vista de registro de marca
Route::post('admin/marca_registrar','Autos@marca_registrar');

//Ruta para cargar vista de registro de modelo
Route::get('admin/modelo_form','Autos@modelo_form');

//Ruta para cargar vista de registro de modelo
Route::post('admin/modelo_registrar','Autos@modelo_registrar');

//Ruta para cargar vista de registro de banner
Route::get('admin/banner','Banners@banner_form');

//Ruta para cargar vista de registro de banner
Route::post('admin/banner_add','Banners@banner_add');


/***************USUARIOS*****************/
Route::get('usuario/registrar_form','Usuario@registrar_form');
Route::post('usuario/registrar','Usuario@registrar');
Route::get('usuario/editar_form','Usuario@editar_form');
Route::post('usuario/editar','Usuario@editar');

Route::get('login','Usuario@login_view');
Route::post('login','Usuario@login');




Route::get('decrypt',function(){


	$user = DB::getinstance()->table('usuarios')->where('correo','mjaguinagap@gmail.com')->where('password','NmFlc2JSZXE5Vks1Q0xzS1JmTlhRZz09')->first();
	Debug::varDump($user);


	$encode = Encrypter::encode('123');
	echo  $encode;
	echo "<br>";


	$encode = Encrypter::encode('123125|165145194323123');
	echo  $encode;
	echo "<br>";
	echo Encrypter::decode($encode);

	$marcas = DB::getinstance()->table('usuarios')->where('estado','3')->get();
	Debug::varDump($marcas);
});



