
<x-dropdown>

    @foreach ($movies as $movie )
        <x-dropdown-item
            href="/?movie={{ $movie->id }}"
        >
            {{ ucwords($movie->title) }}
        </x-dropdown-item>
        @endforeach
   
</x-dropdown>