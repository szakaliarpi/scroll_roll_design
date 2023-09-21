<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova">
    <link rel="icon" href="../../img/app-icon.svg" type="image/x-icon" sizes="any">
    @vite('resources/css/app.css')
    @inertiaHead
</head>
<body>
@inertia
@vite('resources/js/app.js')
</body>
</html>
