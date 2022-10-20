
@extends('layouts.layout-master')


@section('content')

<div class="p-10 lg:px-28">


    <div class="flex flex-col gap-5 pb-8 border-b-2">
        <h1 class="text-4xl">Bienvenido {{Auth::user()->name}} </h1>
        <p>En este tablero encontraras los recursos necesarios para poder realizar tu diagnostico.</p>
    </div>


    <div class="w-full my-5 gap-10 grid grid-cols-1 lg:grid-cols-2">

        {{-- Opciones del menu [Prediagnostico y Diagnostico] --}}
        <div class=" gap-10 flex flex-col">

            {{-- -----> Tarjeta de prediagnostico --}}
            <div class=" flex flex-wrap gap-10 items-center grow basis-0 lg:flex-nowrap">

                <img class=" w-80 h-48 my-10 object-cover" src="./assets/images/illustrations/diagnostico.svg" alt="">

                <div class="flex flex-col gap-5 items-start justify-center">
                    <h2>Realizar Diagnostico</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, in.</p>
                    <button class=" btn-primary">Ingresar</button>
                </div>

            </div>

            {{-- -----> Tarjeta de diagnostico --}}
            <div class=" flex flex-col bg-bl">

                {{-- -----> Tarjeta de prediagnostico --}}
                <div class=" flex flex-wrap gap-10 items-center grow basis-0 lg:flex-nowrap">

                    <img class=" w-80 h-48 object-cover" src="./assets/images/illustrations/prediagnostico.svg" alt="">

                    <div class="flex flex-col gap-5 items-start justify-center">
                        <h2>Prediagnostico</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, in.</p>
                        <button class=" btn-primary">Ingresar</button>
                    </div>

                </div>
            </div>

        </div>

        {{-- Barra de medicos disponibles --}}
        <div class=" flex flex-col items-center gap-5">

            <lord-icon
                src="https://cdn.lordicon.com/hdiorcun.json"
                trigger="loop"
                delay="1000"
                colors="primary:#121331,secondary:#ff8e3c"
                style="width:250px;height:250px">
            </lord-icon>
            <h2>Medicos Disponibles</h2>
            <p class=" lg:px-32 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores libero
                inventore fuga ex excepturi, laboriosam ipsa esse saepe aliquid commodi, beatae earum amet! Sunt sequi perferendis eligendi porro, non temporibus.</p>

            <div class="flex gap-5">
                <button class="btn-primary">Ver todos los medicos</button>
                <button class="btn-primary">Ver mi medico</button>
            </div>
        </div>


    </div>


    <div class="w-full my-28 gap-10 grid grid-cols-1 lg:grid-cols-2">
        <div class=" text-center flex flex-col justify-center items-center gap-10 bg-[#ff8e3c] py-20 px-5 rounded-lg">

            <i class='bx bxs-virus text-7xl text-[#fffffe]'></i>
            <h1 class="text-[#fffffe]">Enfermedades Neuro-Musculares</h1>
            <p class="lg:px-32 text-[#fffffe]">Las enfermedades neuromusculares son un conjunto de más de 150 patologías que afectan a la musculatura y al sistema nervioso, y cuya principal característica es la pérdida de fuerza muscular.</p>

        </div>
        <div class=" text-center flex flex-col justify-center items-center gap-10 bg-[#ff8e3c] py-20 px-5 rounded-lg">

            <i class='bx bx-desktop text-7xl text-[#fffffe]' ></i>
            <h1 class="text-[#fffffe]">Sistema de Enfermedades Neuro-Musculares</h1>
            <p class="lg:px-32 text-[#fffffe]">Las enfermedades neuromusculares son un conjunto de más de 150 patologías que afectan a la musculatura y al sistema nervioso, y cuya principal característica es la pérdida de fuerza muscular.</p>

        </div>
    </div>



</div>


@endsection



@section('scripts')



@endsection
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}
