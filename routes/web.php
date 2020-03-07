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



//路由定义
Route::get('/', function () {
    return view('welcome');
});

Route::get('/routetest',function(){
    return "闭包路由";
});

Route::any('/rout',function(){
    return "route";
});

Route::get('/age1/{age}',function($age){
    return $age;
});

Route::get('test8/{id}/{name}',function($id,$name){
        return $name;
});


//路由到控制器
Route::get('hello/word/{id}','TestController@hello')->name('hello');
Route::get('test/{id}/{name}','TestController@test');
Route::get('test/{id?}/{name?}','TestController@test');



Route::get('index','IndexController@index');
Route::get('foo','TestController@foo')->name('foo');
Route::get('age/{age}','TestController@age');

