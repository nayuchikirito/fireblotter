<option
    {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 mb-1']) }}
    @selected($selected ?? false)
>
    {{ $slot }}
</option>
