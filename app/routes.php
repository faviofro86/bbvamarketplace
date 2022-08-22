<?php

//Example of routes

//Ruta Inicial del Proyecto
Route::get('/','Home@index');

//Ruta asignada a controlador y funcion
Route::get('listado','Autos@listado');

//Ruta asignada a controlador y funcion
Route::get('marcas','Autos@marcas');


/******VEHÍCULOS******/
Route::get('autos/{slug}','Autos@detalle');//Ruta para vista detalle de vehículo
Route::get('admin/auto_form','Autos@auto_form');//Ruta para cargar vista de registro de vehículo
Route::post('admin/auto_registrar','Autos@auto_registrar');//Ruta para grabar datos de registro de vehículo
Route::post('ficha/{slug}','Autos@ficha');//Ruta para acceder a la ficha técnica
Route::post('admin/poblarmodelo','Autos@poblarmodelo');//Ruta asignada a controlador y funcion



/******MARCAS******/
Route::get('admin/listarmarcas','Autos@listar_marcas');//Ruta para LISTAR MARCAS
Route::get('admin/marca_form','Autos@marca_form');//Ruta para cargar vista de REGISTRO de MARCA
Route::post('admin/marca_registrar','Autos@marca_registrar');//Ruta para REGISTRO de MARCA
Route::get('admin/marca_edit','Autos@editar_marca');//Ruta para cargar vista de EDICIÓN de MARCA
Route::post('admin/marca_editar','Autos@marca_editar');//Ruta para EDICIÓN de MARCA
Route::get('admin/disablemarca','Autos@disablemarca');//Ruta para DESACTIVAR MARCA
Route::get('admin/enablemarca','Autos@enablemarca');//Ruta para ACTIVAR MARCA


/******MODELOS******/
Route::get('admin/modelos','Autos@listar_modelos');//Ruta para LISTAR MODELOS
Route::get('admin/modelo_form','Autos@modelo_form');//Ruta para cargar vista de REGISTRO de MODELO
Route::post('admin/modelo_registrar','Autos@modelo_registrar');//Ruta para REGISTRO de MODELO
Route::get('admin/modelo_edit','Autos@editar_modelo');//Ruta para cargar vista de EDICIÓN de MODELO
Route::post('admin/modelo_editar','Autos@modelo_editar');//Ruta para EDICIÓN de MODELO
Route::get('admin/enablemodelo','Autos@enablemodelo');//Ruta para ACTIVAR MODELO
Route::get('admin/disablemodelo','Autos@disablemodelo');//Ruta para DESACTIVAR MODELO


/******BANNERS******/
Route::get('admin/banner','Banners@banner_form');//Ruta para cargar vista de registro de Banner
Route::get('admin/banners','Banners@listar');//Ruta para cargar vista de registro de Banner
Route::post('admin/banner_add','Banners@banner_add');//Ruta para cargar vista de registro de Banner
Route::get('admin/disablebanner','Banners@disable');//Ruta para desactivar Banner
Route::get('admin/enablebanner','Banners@enable');//Ruta para activar Banner



/******USUARIOS ADMIN******/
Route::get('admin/usuario_crear','Usuario@admin_form');//Ruta para cargar vista de CREACIÓN de USUARIO
Route::post('admin/usuario_registrar','Usuario@admin_reg');
Route::get('admin/usuario_listar','Usuario@usuarios_listar');//Ruta para cargar vista de LISTA de USUARIOS
Route::get('admin/disableusuario','Usuario@disableusuario');//Ruta para DESACTIVAR MARCA
Route::get('admin/enableusuario','Usuario@enableusuario');//Ruta para ACTIVAR MARCA
Route::get('admin/usuario_marcas','Usuario@usuario_marcas');//Ruta para ASIGNAR MARCA a USUARIO
Route::post('admin/usuario_marca_registrar','Usuario@admin_marca_add');
Route::get('admin/permisos_eliminar','Usuario@permisos_eliminar');


Route::post('admin/lvehiculos','Autos@vehiculos');//Ruta para listar Vehiculos




//Ruta para logueo admin
Route::get('extranet-adm','Home@login');






Route::get('admin/categorias','Autos@listar_categorias');//Ruta para listar Categorías
Route::get('admin/disablecategoria','Autos@disablecategoria');//Ruta para listar Categorías
Route::get('admin/enablecategoria','Autos@enablecategoria');//Ruta para listar Categorías


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



