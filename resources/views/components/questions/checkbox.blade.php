<div class="p-3">
    <x-form-label :value="__($label)" :tooltip="$tooltip" class="{{ $errors->has($name) ? 'text-red-600' : '' }}"></x-form-label>
    <div class="flex flex-wrap w-full">
        @foreach($choices as $val => $choice)
            <div class="flex flex-row px-4 py-1 w-1/6">
                <x-form-input id="{{ $name.'-'.Str::snake($choice) }}" class="rounded-sm {{ $errors->has($name) ? 'border-red-600' : '' }}" type="checkbox" :name="$name.'[]'" :value="$val" {{ $attributes->merge(collect($value)->contains($val) ? ['checked'=>'checked'] : []) }}></x-form-input>
                <x-form-label for="{{ $name.'-'.Str::snake($choice) }}" class="ml-1 {{ $errors->has($name) ? 'text-red-600' : '' }}" :value="__($choice)"></x-form-label>
            </div>
        @endforeach
    </div>

    @if($errors->has($name))
        @foreach($errors->get($name) as $error)
            <div class="text-sm text-red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>
