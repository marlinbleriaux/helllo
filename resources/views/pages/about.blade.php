@extends('layouts.base',['pageTitle'=> 'About us ' ])


<!-- @section('title')
 
 About Us | hello city
@endsection -->

@section('content')
      <img src="{{asset('image/tél.png')}}" alt="kmb" class="my-12 rounded-full shadow-md">
       <h2 class="mb-5 text-gray-400">Built with <span class="text-pink-500"> &hearts;</span> by les .....</h2>

       <p ><a href="{{route('welcome')}}"class="text-indigo-500
            hover:text-indigo-600 underline">Revenir a la page d'accueil</a></p>

   
    
@endsection
 