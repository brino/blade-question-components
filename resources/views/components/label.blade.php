@props(['value','tooltip'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    @if(!empty($tooltip))
        <x-tooltip>{{ $tooltip }}</x-tooltip>
    @endif
</label>