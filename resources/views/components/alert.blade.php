@props(['type'=>'info'])

@php
    switch ($type) {
        case 'info':
            $class = "bg-blue-100 border-blue-500 text-blue-700";
            break;
        
        case 'danger':
            $class = "bg-red-100 border-red-500 text-red-700";
            break;

        default:
            $class = "bg-red-100 border-red-500 text-red-700";
    }
@endphp

<div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8" >
    <article {{ $attributes->merge(['class'=>"border-l-4 p-4 $class", 'role'=>"alert"]) }} >
        <h1 class="font-bold">{{ $title }}</h1>
        {{ $slot }}
    </article>
</div>