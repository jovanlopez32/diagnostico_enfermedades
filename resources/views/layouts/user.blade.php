@extends('layouts.layout-master')


@section('content')


<div class=" w-full flex flex-col gap-5 items-center justify-center py-20 px-10">

    <lord-icon
        src="https://cdn.lordicon.com/eszyyflr.json"
        trigger="loop"
        delay="1000"
        colors="primary:#121331,secondary:#ff8e3c"
        stroke="30"
        style="width:250px;height:250px">
    </lord-icon>
    <h1>{{Auth::user()->name}}</h1>

    <div class="my-10 flex flex-col items-center justify-center gap-3 text-center">

        <h3>MEDICO ASIGNADO</h3>
        {{--  <p>JOSE JAVIER PEREZ HERNANDEZ</p> --}}
        <p>Aun no tiene un medico Asignado</p>

        <h3 class="pt-10">DIAGNOSTICO</h3>
        {{--  <p>JOSE JAVIER PEREZ HERNANDEZ</p> --}}
        <p>Aun no tiene un prediagnostico realizado</p>

        <div class="flex">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-primary mt-10">Cerrar Sesión</button>
                <a class="btn-primary" href="{{ route('dashboard') }}"> Volver al inicio</a>
            </form>
        </div>


    </div>

</div>




@endsection


@section('scripts')

@endsection
