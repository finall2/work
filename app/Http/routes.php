<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {	
    return view('index'/*, array("us" => "use")*/); 
});
Route::get('/list', function() {
    return 'Список продуктов';
});
Route::post('/add', function() {
    return 'Добавление продукта';
});
Route::get('/add', function() {
    return 'Добавление продукта';
});
Route::get('/remove/{id}', function($id) {
    return 'Удаление продукта'.$id;
});
Route::post('/edit/{id}', function($id) {
    return 'Редактирование продукта';
});

 