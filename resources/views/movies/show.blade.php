<x-layout>
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img class="w-64 lg:w-96 " src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}"
                    alt="poster" class="w-64 lg:w-96">
            </div>
            <div class="md:ml-24">
               <x-information :movie="$movie"/>
                <x-overview :movie="$movie" />
                <div class="mt-12">
                    <h3 class="text-white font-semibold">Featured Crew</h3>
                </div>
                <div class="flex mt-4">
                    @foreach ($movie['credits']['crew'] as $crew)
                    @if ($loop->index <2)
                    <div class="mr-8">
                        <div>
                            {{ $crew['name'] }}
                        </div>
                        <div class="text-gray-400">
                            {{ $crew['job'] }}
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
         <x-trailer :movie="$movie"/>
        </div>
            </div>
            </div>
    <x-movie :movie="$movie"/>
</x-layout>

