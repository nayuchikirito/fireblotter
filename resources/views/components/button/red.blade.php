<button {{ $attributes->merge(['class' => 'bg-red hover:bg-redHover text-white font-medium py-2.5 rounded-lg transition-colors', 'type' => 'submit']) }}>
    {{ $slot }}
  </button>
