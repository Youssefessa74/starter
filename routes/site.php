<?php

use Illuminate\Routing\RouteCollection;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/welcome');
});


Route::get('Damn.php' ,function(){ 
return view("pages/damn");
})->name("damn");

Route::get('contact.php' , function(){

 
  return view("pages/mycontact");
}    
)->name("contact");