<?php

use Illuminate\Routing\RouteCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'] ,function(){
  Route::get('/main' ,"Usercontroller@logicindex");
});
Route::get('damn' ,function(){
  return view('pages/damn');
});

Route::get('/landing', function () {
  
  return view('pages/landing');
});


// Route::get("new" ,"App\Http\Controllers\Firstcontroller@damnwoman");

// Route::group(['namespace'=> 'App\Http\Controllers'] ,function(){
// Route::get('new1' ,"Firstcontroller@damnwoman1");
// Route::get('new2' ,"Firstcontroller@damnwoman2");
// Route::get('new3' ,"Firstcontroller@damnwoman3");
//});
Route::group(['namespace' => "App\Http\Controllers"] ,function(){
  Route::get('index' ,'Usercontroller@getindex');

});

// Route::resource('news','App\Http\Controllers\Usercontroller');






Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


