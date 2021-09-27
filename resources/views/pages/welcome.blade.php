@extends('layouts.base')
<!-- 
@section('title')
    HELLO CITY
@endsection -->

@section('content')
<img src="{{asset('image/drapeau.jpg')}}" alt="cameroun" class="mt-12 rounded shadow-md h-32 ">
       <h1 class="mt-5 text-3xl sm:text-5xl font-semibol test-indigo-600">hello from cameroun!</h1>

       <p class="text-lg text-gray-800" >it is currently {{ date('h:i A') }}</p>
   
@endsection 