<?php

//Example of routes

//Ruta Inicial del Proyecto
Route::get('/','Home@index');

//Ruta asignada a controlador y funcion
Route::get('detalle','Home@detalle');

//Ruta asignada a controlador y funcion
Route::get('listado','Home@listado');

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


