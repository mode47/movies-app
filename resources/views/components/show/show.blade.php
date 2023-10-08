<div class=" border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">
            cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($show['credits']['cast'] as $cast)
            @if ($loop->index<5) <div class="mt-8">
                <a href="https://movies.andredemos.ca/actors/1185997">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }} " alt="actor1"
                        class="hover:opacity-75 transition ease-in-out duration-150"></a>
                <a href="#"> {{ $cast['name'] }}</a>
                <div class="mt-2 text-blue-600 font-semibold">
                    {{ $cast['character'] }}</h1>
                </div>
                <h1>
        </div>

        @endif
        @endforeach
    </div>

</div>

</div <div class=" border-b border-gray-800">
<div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl text-red-400 font-semibold">
        Imgaes</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
        @foreach ($show['images']['backdrops'] as $image)
        @if ($loop->index<10) <div class="mt-8">

            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }} " alt="actor1"
                class="hover:opacity-75 transition ease-in-out duration-150">


    </div>

    @endif
    @endforeach
</div>

</div>