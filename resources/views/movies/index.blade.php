<x-layout>
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if($movies->count())
        <div class="lg:grid lg:grid-cols-5">
            @foreach ($movies as $movie )
                <x-movie-card :movie="$movie"/>
            @endforeach  
        @else
          <p class="text-center">
            No shows yet. please try later.
         </p>
         @endif
    </div>
</main>
</x-layout>
