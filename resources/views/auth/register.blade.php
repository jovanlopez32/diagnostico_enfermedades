
@extends('layouts.layout-master')
@section('title', ' Registro ')



@section('content')

<div class=" w-full gap-10 grid grid-cols-1 lg:grid-cols-2 ">

    <div class=" w-full h-screen flex flex-col justify-center items-center gap-10 text-center px-10 bg-[#fffffe]">


        <lord-icon
            src="https://cdn.lordicon.com/ippkhukl.json"
            trigger="loop"
            colors="primary:#121331,secondary:#ff8e3c"
            style="width:250px;height:250px">
        </lord-icon>

        <h1>Elige una de las siguientes opciones</h1>

        <div class="flex gap-5">
            <a class="btn-primary" id="medico" href="#form-register">Medico</a>
            <a class="btn-primary" id="paciente" href="#form-register">Paciente</a>
        </div>
        {{--  --}}

        <a class=" text-sm text-[#ff8e3c]" href="{{ route('home') }}">Volver al inicio</a>

    </div>



    <div id="form-register" class="px-8 flex flex-col items-center justify-center h-screen">

        <div>
            <div class="flex items-center gap-5">
                <i class='bx bx-user-voice text-7xl'></i>
                <h1>CREAR UNA CUENTA</h1>
            </div>

            <form class="flex flex-col gap-2 my-10" method="POST" action="{{ route('register') }}" >

                @csrf

                <div class="flex flex-col">
                    <label for="">Nombre Completo</label>
                    <input class="input-form" type="text" name="name" required>
                </div>

                <div class="flex flex-col">
                    <label for="">Correo Electronico</label>
                    <input class="input-form" type="email" name="email" required>
                </div>

                <div class="flex flex-col">
                    <label for="">Contraseña</label>
                    <input class="input-form" type="password" name="password" required>
                </div>

                <div class="flex flex-col">
                    <label for="">Confirmar Contraseña</label>
                    <input class="input-form" type="password" name="password_confirmation" required>
                </div>

                <div id="medico-form" class="hidden">
                    <label for="">Cedula Profesional</label>
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full  bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100 ">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm "><span class="font-semibold">Sube aqui tu</span> cedula profesional</p>
                            <p class="text-xs">Solamente PDF</p>
                            <input id="dropzone-file" type="file" name="document" class="hidden" />
                        </div>
                    </label>
                </div>

                <label for="credentials"></label>
                <input id="credential" type="hidden" name="credential" value="0">

                @include('components.auth-validation-errors')

                <div class="my-5">
                    <button type="submit" class="btn-primary">Crear Cuenta</button>
                </div>


            </form>
        </div>

        <p class=" text-sm ">Ya tienes cuenta? Inicia sesión <a class=" text-[#ff8e3c]" href="{{ route('login') }}">aqui</a>.</p>

    </div>



</div>


@endsection



@section('scripts')

    {{-- @vite(['resources/js/animation_user/home.js', 'resources/js/user/home.js']) --}}
    @vite(['resources/js/components/register.js'])

    {{-- @vite(['resources/js/navbar/navbar.js']) --}}

@endsection


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}
