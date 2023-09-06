<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Usercontroller extends Controller{
  
   
    // public function getindex(){
      
    //         $data=[];
    //         $data['name'] ="Youssef" ;
    //         $data['Age'] ="22";
    //           return view('pages/welcome' ,$data);
    //      }

    public function getnews(){
        return view('damn');
    }

public function logicindex(){
    // $data=['name' => "Yousef essa" ,
    // 'Age' => 22 ,
    //  "Education" => "Faculty of computers and AI" ]; 
    return view('pages/welcome' ,compact('data'));
}
   
}
