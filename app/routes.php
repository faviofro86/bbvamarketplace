<?php

//Example of routes

//Ruta Inicial del Proyecto
Route::get('/','Home@index');

//Ruta asignada a controlador y funcion
Route::get('detalle','Home@detalle');

//Ruta asignada a controlador y funcion
Route::get('listado','Home@listado');

Route::get('function',function(){
	//Puedes definir rutas con nombres diferentes
});


Route::post('user/register',function(){
	//Puedes definir rutas de tipo POST
});

Route::get('home/index/{id}/{var}',function($id,$var = null){
	//Si deseas que un parametro sea obligatorio solo debes poner null a la variable
	echo 'Ruta con Parametros: '.$id.'-'.$var;
});

//Ruta asignada a controlador y funcion
Route::get('test','Prueba@index');

//Ruta asignada a controlador y funcion
Route::get('pruebaxd','Home@index');

//Ruta asignada a controlador y funcion
Route::get('pruebaxd2','Autos@index');

//Ruta asignada a controlador y funcion
Route::post('insert','Home@insertar');

//Controlador RestFul asignado a una ruta
Route::controller('restfules','Restful');

Route::get('auto/{slug}',function($slug = null){
	View::render('home/index');
});

Route::get('autos/{slug}','Autos@detalle');


