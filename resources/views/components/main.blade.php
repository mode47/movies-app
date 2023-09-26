
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <div class="lg:grid lg:grid-cols-5">
        @foreach ($movies as $movie)
        ddd
            <x-movie-card
                :title="$movie['title']"
                :imageUrl="$movie['imageUrl']"
                :movieUrl="$movie['movieUrl']"
                :rating="$movie['rating']"
                :releaseDate="$movie['releaseDate']"
                :genres="$movie['genres']"
            />
        @endforeach
    </div>
</main>