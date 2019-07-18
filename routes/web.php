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

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/user/{id}/{name}', function($id, $name){
//     return 'This is user '.$id.' with the name '.$name.' .';
// });

// calling a service interface. will go to controller directory and look for specific function there
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/signin', 'PagesController@signin');
// step by step, route to middleware controller to run index function, which open index.php. It uses app.blade.php layout so both will be loaded at once


