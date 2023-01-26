@props(['title'=>""])

<div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8" >
    {{ $title }}
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            {{ $slot }}
        </div>
    </div>
</div>
