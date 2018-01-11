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

Route::get('/', function () {
    return view('welcome');


});

Route::get('/about', function () {
//    return view('welcome');
    return "<h1 >This is a heading</h1>";

});

Route::get('/contact', function () {
//    return view('welcome');
    return "Hello contact page";
});

Route::get('/post/{id}/{name}', function($id, $name) {

    return "This is post number ". $id. " " . $name;

});

Route::get('admin/posts/example', array('as'=>'admin.home' ,function (){
    $url = route('admin.home');

    return "this url is ". $url;
}));
Route::get('/post', 'PostController@index');
//Route::resource('posts', 'PostsController');
Route::group(['middleware' => ['web']], function (){


});
