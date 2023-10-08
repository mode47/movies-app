<x-layout>
    <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">


       <header id="popular_Movies" class="mb-2 text-red-500 bold"> popular Movies </header>
            </div>
            <div class="lg:grid lg:grid-cols-5">
                @foreach ($popularMovies as $movie)

                <x-movie.movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
            <div>
                <div>
                    <header id="nowPlaying" class="mb-2 text-red-500 bold"> Now Playing </header>
                    </div>
                    <div class="lg:grid lg:grid-cols-5">
                        @foreach ($nowPlaying as $movie)

                        <x-movie.movie-card :movie="$movie" :genres="$genres" />
                        @endforeach
                    </div>
                    <div>
                        <div>
                            <header id="Top_rated" class="mb-2 text-red-500 bold"> Top rated</header>
                            </div>
                            <div class="lg:grid lg:grid-cols-5">
                                @foreach ($topRated as $movie)
                                <x-movie.movie-card :movie="$movie" :genres="$genres" />
                                @endforeach
                            </div>
                            <div>
    </main>
    </x-layout>
