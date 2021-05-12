@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full shadow-sm border-gray-300 focus:ring focus:ring-blue-300 focus:ring-4']) !!}>
