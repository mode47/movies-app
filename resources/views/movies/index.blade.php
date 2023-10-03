<x-layout>
    <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
        <div>
            <header class="mb-2 text-red-500 bold"> popular Movies </header>
            </div>
            <div class="lg:grid lg:grid-cols-5">
                @foreach ($populermovies as $movie)
                <x-movie.movie-card :movie="$movie" :genres="$genres" :type="$type"/>
                @endforeach
            </div>
            <div>
    </main>
    </x-layout>
