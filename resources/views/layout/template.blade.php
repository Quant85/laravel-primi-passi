<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel | primi passi </title>
  
  {{-- font google --}}
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
  <body>
    @yield('navbar')
    @yield('header')
    @yield('main')
    @yield('footer')
  </body>
</html>