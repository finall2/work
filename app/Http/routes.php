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
    return '������ ���������';
});
Route::post('/add', function() {
    return '���������� ��������';
});
Route::get('/add', function() {
    return '���������� ��������';
});
Route::get('/remove/{id}', function($id) {
    return '�������� ��������'.$id;
});
Route::post('/edit/{id}', function($id) {
    return '�������������� ��������';
});

 