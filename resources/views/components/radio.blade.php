<div class="w-full p-3 flex flex-col">
    <x-label :value="__($label)" :tooltip="$tooltip" class="{{ $errors->has($name) ? 'text-red-600' : '' }}"></x-label>
    <div class="flex flex-row">
        @foreach($choices as $val => $choice)
            <div class="flex flex-row p-4">
                <x-input id="{{ $name.'-'.Str::snake($choice) }}" class="{{ $errors->has($name) ? 'border-red-600' : '' }}" type="radio" name="{{ $name }}" value="{{ $val }}" {{ $attributes->merge((int) $value === $val || old($name) === $val ? ['checked'=>'checked'] : []) }}></x-input>
                <x-label for="{{ $name.'-'.Str::snake($choice) }}" class="ml-1 {{ $errors->has($name) ? 'text-red-600' : '' }}" :value="__($choice)"></x-label>
            </div>
        @endforeach
    </div>

    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <div class="text-sm text-red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>
