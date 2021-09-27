<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>  @yield('title') </title>   -->

    <title>{{isset($pageTitle)? $pageTitle. '|'.config('app.name') : config('app.name')}}</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 


       
    </head>
    <body class="py-6 flex flex-col justify-between min-h-screen items-center"> 
     <main role="main" class="flex flex-col justify-center items-center">
         @yield('content')
     </main> 
      
 @include('layouts/partials/_footer')
</html>
