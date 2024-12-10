@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-white text-black focus:border-blue-500 focus:ring-2 focus:ring-blue-300 rounded-md shadow-sm transition ease-in-out duration-150']) !!}>
