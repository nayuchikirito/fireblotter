<button {{ $attributes->merge(['class' => 'text-sm text-white bg-red hover:bg-redHover rounded-md px-3 py-1', 'type' => 'button']) }}>{{ $slot }}</button>
