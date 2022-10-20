
@extends('layouts.layout-master')
@section('title', ' ')



@section('content')






<div class="min-h-screen flex flex-col items-center justify-center ">



    <div class="px-8 py-20">

        <div class="flex items-center gap-5">
            <i class='bx bxs-door-open text-7xl'></i>
            <h1>HOLA DE NUEVO!</h1>
        </div>

        <form class="flex flex-col gap-5 my-10" method="POST" action="{{ route('login') }}" >

            @csrf

            <div class="flex flex-col">
                <label for="">Correo Electronico</label>
                <input class="input-form" type="email" name="email" required>
            </div>

            <div class="flex flex-col">
                <label for="">Contraseña</label>
                <input class="input-form" type="password" name="password" required>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            @include('components.auth-validation-errors')



            <div class="my-5">
                <button type="submit" class="btn-primary">Iniciar Sesion</button>
            </div>

        </form>

        <p class=" text-sm ">No tienes cuenta? Registrate <a class=" text-[#ff8e3c]" href="{{ route('register') }}">aqui</a>.</p>
        <a class=" text-sm text-[#ff8e3c]" href="{{ route('home') }}">Volver al inicio</a>

    </div>



</div>


@endsection



@section('scripts')

    {{-- @vite(['resources/js/animation_user/home.js', 'resources/js/user/home.js']) --}}


    {{-- @vite(['resources/js/navbar/navbar.js']) --}}

@endsection

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}
