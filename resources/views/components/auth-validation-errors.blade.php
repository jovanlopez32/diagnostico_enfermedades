


@if ($errors->any())

    <div>
        <p class=" text-sm text-[#ffb37c]">Lo siento, los datos son incorrectos:</p>
        <ul class=" list-disc list-inside text-sm text-[#ffb37c]">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif



{{-- @props(['errors'])

@if ($errors->any())
    <div class="relative" {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Lo siento, los datos son incorrectos:') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 --}}
