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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// steps for authorization using gates and policies 
// 1- define gate [define the logic which define hoe the user is autheroized ]. How?
//                 1-via closure
//                 2-using policies "think of 'gates' and 'policies' like a 'routes' and 'controllers'"  how?
//                   I-create policy  II-define logic for actions inside it  III- rgiester it in 'AuthServiceProvider'

// 2- use the gate within  ['views','user model', 'controller','routes','middleware']






// gates
Route::get('/subs',function(){
    //use gates  'subs-only' 
    if(Gate::allows('subs-only',Auth::user())){
        return view('subs');
    }else{
        return 'You are not subscriber , unauthorized';
    }
   
});