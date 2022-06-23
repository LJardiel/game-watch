@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md bg-blanco shadow-sm border-negrito focus:border-rojo focus:ring focus:ring-negrito focus:ring-opacity-50']) !!}>
