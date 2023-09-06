@extends('layout.master_layout')
<title>@section('title' ,"my contact page")
</title>
    <body>
   @yield('test')
<br>
       this is my contact layout
   @section('ma_nav')
       @parent
       <ul><li><a href="/"> damn woman</a></li></ul>
   @endsection
            
    </body>
