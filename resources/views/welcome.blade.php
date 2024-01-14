<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP MBANZA-NGUNGU</title>
    <style>
      [x-cloak] { display: none !important; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
  </head>
  <body>
    <h1>
      <livewire:home>
    </h1>
    @livewireScripts
</body>

</html>


