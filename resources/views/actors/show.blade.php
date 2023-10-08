
<x-layout>
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img class="w-64 lg:w-96 " src="{{ $actor['profile_path'] }}" alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
                <x-actor.information :actor="$actor" />
                <x-actor.overview :actor="$actor" />
                <div class="mt-12">
                    <h3 class="text-white font-semibold mb-4">Known For</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach ($knownForMovies as $knownForMovie)
                    <a href={{ $knownForMovie['linkToPage'] }}>
                        <div class="mr-4">
                                <img class="hover:opacity-75 transition ease-in-out duration-150" src="{{ $knownForMovie['poster_path'] }}" alt="poster" class="w-64 lg:w-96">
                            </div>
                            <div>
                                <h1 class="text-gray-500 font-semibold mt-3 text-sm leading-normal block hover:text-white ">
                                   {{$knownForMovie['title']}}
                                </h1>
                            </div>
                        </a>
                    @endforeach
                </div>
    </div>
  
</x-layout>
