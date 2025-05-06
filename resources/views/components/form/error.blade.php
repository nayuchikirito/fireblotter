@props(['name'])

@error($name)
    <p class="text-xs text-red font-semibold mt-1">{{ $message }}</p>
@enderror
