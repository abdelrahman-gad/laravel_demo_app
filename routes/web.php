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

use App\Notifications\TaskCompleted;

use App\User;




Route::get('/', function () {
    $users  = User::find(1);// note you can send to multiple users [control this via collections]
    Notification::send($users , new TaskCompleted());
    // this is convenient if you send to one user
   // User::find(1)->notify(new TaskCompleted); 
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


