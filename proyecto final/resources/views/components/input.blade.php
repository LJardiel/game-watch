@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-blanco shadow-xl border-negro border-4 border-t-negrito border-b-black focus:border-gray-500 focus:border-t-white focus:ring-0']) !!}>
