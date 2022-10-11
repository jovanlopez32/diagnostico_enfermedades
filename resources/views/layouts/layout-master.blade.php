<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bantay Tactical @yield('title')</title>

    {{-- Fonts Bantay Tactical --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:100,200,300,400,500,600,700,800" rel="stylesheet" />
    

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" min-h-screen">

    @yield('content')
    
    @yield('scripts')
</body>
</html>