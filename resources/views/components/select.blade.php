<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'.($errors->has($name)?' text-red-600 border-red-600':'')]) !!}>
    <option value="">Choose ...</option>
    @foreach($options as $val=>$label)
        <option {{ $val == old($name) || $val === $value ? 'selected="selected"' : '' }} value="{{ $val }}">
            {{ $label }}
        </option>
    @endforeach
</select>