<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagnostico De Enfermedades @yield('title')</title>

    {{-- Fonts Diagnostico de Enfermedades --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=montserrat:100,200,300,400,500,600,700,800" rel="stylesheet" />
    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- Modal Github --}}
    <link rel="stylesheet" href="https://rawcdn.githack.com/AnasOnGit/ModalJs/f3e03e23e9d7459122951c2eddb58f22ded77490/modal.css">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @auth
        @include('components.responsive-nav-link')
    @endauth

    @yield('content')



    @auth
        @include('components.auth-footer')
    @endauth

    @yield('scripts')

    @vite(['resources/js/components/navbar.js'])
    {{-- Lordicons --}}
    <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
    {{-- Modal Github --}}
    <script src="https://rawcdn.githack.com/AnasOnGit/ModalJs/f3e03e23e9d7459122951c2eddb58f22ded77490/modal.js"></script>
</body>
</html>
