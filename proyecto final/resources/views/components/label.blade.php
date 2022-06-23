@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-blanco']) }}>
    {{ $value ?? $slot }}
</label>
