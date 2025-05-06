<th scope="col" {{ $attributes->merge(['class' => 'px-6 py-3']) }}>
    <div class="flex items-center">
        {{ $slot }}
        <span class="sort clickable-items ml-2" data-column="{{ $column }}"><i class="fa-solid fa-sort"></i></span>
    </div>
</th>
