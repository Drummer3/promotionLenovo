@props(['active'])

@php
$classes = ($active ?? false)
            ? 'px-4 bg-blue-300 inline-flex items-center px-1 pt-1 text-base leading-5 text-black focus:outline-none transition duration-150 ease-in-out font-bold'
            : 'px-4 bg-gray-100 inline-flex items-center px-1 pt-1 text-base leading-5 text-black hover:text-blue-400 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out font-bold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
