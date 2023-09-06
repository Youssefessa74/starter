<?php

use Illuminate\Routing\RouteCollection;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\Front\Usercontroller;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/admin" ,function(){
 return "Admin";
});

// Route::namespace("App\Http\Controllers\Front")->group(function(){

//   Route::get("users/show" ,"Usercontroller@ShowAdmin");
//   Route::delete("users/delete" ,"Usercontroller@ShowAdmin");
//   Route::get("users/edit" ,"Usercontroller@ShowAdmin");
//   Route::put("users/update" ,"Usercontroller@ShowAdmin");
// });

// Route::prefix("users")->group(function(){

//    Route::get("show" ,"Usercontroller@ShowAdmin");
//    Route::delete("delete" ,"Usercontroller@ShowAdmin");
//    Route::get("edit" ,"Usercontroller@ShowAdmin");
//    Route::put("update" ,"Usercontroller@ShowAdmin");
    
// });

