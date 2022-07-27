<div class="w-full p-3 flex flex-col">
    <x-label for="{{ $name }}" :value="__($label)" :tooltip="$tooltip" class="{{ $errors->has($name) ? 'text-red-600' : '' }}"></x-label>
    <x-input id="{{ $name }}" class="block mt-1 w-full {{ $errors->has($name) ? 'text-red-600 border-red-600' : '' }}" type="{{ $type }}" name="{{ $name }}" :value="old($name) ?? $value" {{ $attributes }}></x-input>
    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <div class="text-sm text-red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>
