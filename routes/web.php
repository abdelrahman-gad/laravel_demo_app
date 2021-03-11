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

use App\Hello\Hello;
use App\Hello\HelloFacade;
Route::get('/', function () {
  return   HelloFacade::sayHi('ahmed');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






