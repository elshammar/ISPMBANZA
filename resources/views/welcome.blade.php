<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP MBANZA-NGUNGU</title>
    @vite('resources/css/app.css')
    @livewireStyles
  </head>
  <body>
    <h1>
      <livewire:home>
    </h1>
    @livewireScripts
</body>
</html>

