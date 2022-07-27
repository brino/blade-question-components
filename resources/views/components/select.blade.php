@props(['disabled' => false])

<div class="w-full p-3 flex flex-col">
    <x-label for="{{ $name }}" :value="__($label)" :tooltip="$tooltip ?? null" class="{{ $errors->has($name) ? 'text-red-600' : '' }}"></x-label>
    <select id="{{ $name }}" name="{{ $name }}" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'.($errors->has($name)?' text-red-600 border-red-600':'')]) !!}>
        <option value="">Choose ...</option>
        @foreach($options as $val=>$label)

            <option {{ $val == old($name) || $val === $value ? 'selected="selected"' : '' }} value="{{ $val }}">
                {{ $label }}
            </option>
        @endforeach
    </select>
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <div class="text-sm text-red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>
