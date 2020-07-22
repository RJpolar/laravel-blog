<?php

use Illuminate\Support\Facades\Route;

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
    $param = array(
      "uhere" => "Gundam Breaker Project"
    );
    return view('welcome', $param);
});
Route::resource('work', 'WorkController', ['only' => [
    'index', 'create', 'store', 'edit'
]]);

Route::get('/part/list', function () {
    return view('partlist');
});
Route::get('/part/add', function () {
    return view('partadd');
});
Route::get('/part/edit/{id?}', function ($id = null) {
    return $id;
});
