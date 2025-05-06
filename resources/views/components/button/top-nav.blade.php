<button {{ $attributes->merge(['class' => 'py-1 px-2 bg-red transition-colors duration-300 ease-in-out hover:bg-redHover rounded-lg']) }}>
    {{ $slot }}
</button>


