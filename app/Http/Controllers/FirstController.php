<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers;

class FirstController extends Controller
{

    public function __construct(){
        $this->middleware(middleware:'auth')->except('damnwoman3');
    }


    public function damnwoman1(){
        return "Damn woman1";
    }
    public function damnwoman2(){
        return "Damn woman2";
    }
    public function damnwoman3(){
        return "Damn woman3";
    }
    public function damnwoman4(){
        return "Damn woman4";
    }
}
