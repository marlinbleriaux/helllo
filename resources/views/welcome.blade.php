<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>hello City</title>

       
    </head>
    <body class="antialiased">
       <h1>hello from cameroun!</h1>
       <p>it is currently {{ date('h:i a') }}</p>
    </body>
    <footer>
        <p> $copy; Copyright {{ date('Y') }} <a href="/about-us">About Us </a></p>
    </footer>
</html>
