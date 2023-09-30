<x-layout>
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <div>
        <header class="mb-2 bold   text-red-500"> popular Movies </header>
        </div>

        <div class="lg:grid lg:grid-cols-5">
            @foreach ($populermovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
        <div>
            <header class="mb-2 bold   text-red-500"> Now Playing  Movies </header>
            </div>

        <div class="lg:grid lg:grid-cols-5">
            @foreach ($nowplaying as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
</main>
</x-layout>
