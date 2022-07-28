@props(['value','tooltip'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    @if(!empty($tooltip))
        <x-form-tooltip>{{ $tooltip }}</x-form-tooltip>
    @endif
</label>