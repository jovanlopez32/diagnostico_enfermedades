
<header class=" sticky top-0 w-full h-20 bg-black flex px-10 items-center">

    <div class=" flex items-center justify-center grow basis-0">

        <h2 class=" text-white"><a href="{{route('dashboard')}}">D.E.</a></h2>

    </div>
    <nav id="navbar" class=" fixed top-0 bg-black -right-full h-screen mt-20 w-3/4 flex flex-col-reverse gap-10 items-center justify-center grow basis-0 lg:static lg:flex-row lg:h-auto lg:mt-0 transition-all ease-linear">
        <ul class="flex flex-col  items-center justify-center text-white gap-5 lg:flex-row">
            <li>Prediagnostico</li>
            <li>Diagnostico</li>
            <li>Medicos</li>
        </ul>

        <a href="{{ route('user') }}"><i class='bx bx-user text-5xl p-3 text-white border-2 rounded-full lg:px-2 lg:py-1 border-white lg:text-2xl'></i></a>

    </nav>

    <div class=" lg:hidden flex grow basis-0 items-center justify-center">
        <button id="button-navbar"><i class='bx bx-menu-alt-left text-white text-4xl'></i></button>
    </div>

</header>



{{-- @props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}
