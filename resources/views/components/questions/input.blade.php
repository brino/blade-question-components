<div class="p-3">
    <x-form-label for="{{ $name }}" :value="__($label)" :tooltip="$tooltip" class="{{ $errors->has($name) ? 'text-red-600' : '' }}"></x-form-label>
    <x-form-input id="{{ $name }}" class="block mt-1 w-full rounded-sm {{ $errors->has($name) ? 'text-red-600 border-red-600' : '' }}" type="{{ $type }}" name="{{ $name }}" :value="$value" {{ $attributes }}></x-form-input>
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <div class="text-sm text-red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>
