@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:ring focus:ring-red-400 focus:ring-4']) !!}>
