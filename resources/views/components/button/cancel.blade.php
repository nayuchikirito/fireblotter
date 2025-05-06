<button {{ $attributes->merge(['class' => 'bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2.5 rounded-lg transition-colors', 'type' => 'button']) }}>
    {{ $slot }}
</button>
