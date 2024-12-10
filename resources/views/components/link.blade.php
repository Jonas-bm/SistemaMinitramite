<!--No está siendo usado de momento
-->
@php
    $classes="underline text-xs text-gray-500 hover:text-indigo-500 rounded-md focus:outline-none transition ease-in-out duration-150 font-bold"
@endphp
<!--Para linkear los formularios y darle atributos de login y registro.
-->
<a {{$attributes->merge(['class'=>$classes])}}>
    {{$slot}}
</a>

