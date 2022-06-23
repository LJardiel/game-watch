@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-rojo font-bold leading-5 text-rojo focus:outline-none focus:border-rojo transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-bold leading-5 text-blanco hover:text-rojo hover:border-rojo focus:outline-none focus:text-negrito focus:border-negrito transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
