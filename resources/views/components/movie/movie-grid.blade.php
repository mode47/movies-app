<x-movie-featuer :movie="$movies[0]" />
        @if($movies->count()>1)
        <div class="lg:grid lg:grid-cols-5">
            @foreach($movies as $movie)
            <x-movie-card :movie="$movie"/>
            @endforeach


        </div>

        @endif

