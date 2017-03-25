<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function(){
    return view('welcome');

});

*/

/*
Route::get('/', function(){
    return redirect('test');

});

Route::get('test', function(){
    return view('welcome');

});
*/
/*
Route::get('hello/{name}', function($name){
    return 'hello, ' .$name;

});
*/

/*
Route::get('hello/{name?}', function($name='everybody'){
    return 'hello, ' .$name;

});
*/

/*
Route::get('hello/{name?}', function($name='everybody'){

    return 'hello, ' .ucfirst($name);

});
*/
/*
Route::get('/', function(){
    return 'index';
});

Route::post('tasks', function(){
    return redirect('/');
});


Route::patch('tasks/{task}', function($task){
    return redirect('/');
});


Route::delete('tasks/{task}', function($task){
    return redirect('/');
});

*/

Route::get('/','TaskController@index');

Route::post('tasks','TaskController@store');

Route::patch('tasks/{task}','TaskController@update');

Route::delete('tasks/{task}','TaskController@destory');
