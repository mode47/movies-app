<h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie['title'] }}</h2>
<div class="flex flex-wrap items-center text-gray-400 text-sm">
    <svg class="fill-current text-red-500 w-4" viewBox="0 0 24 24">
        <g data-name="Layer 2">
            <path
                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                data-name="star"></path>
        </g>
    </svg>
    <div class="flex flex-wrap items-center text-gray-400 text-sm">
        <spen class="mr-1">{{ $movie['vote_average'] }}</h3>
            <spen class="mr-1">|</spen>
            <spen class="mr-1">{{ $movie['release_date'] }}</spen>
            <spen class="mr-1">|</spen>
            <spen class="mr-1">
                @foreach ($movie['genres'] as $gen)
                    {{ $gen['name'] }}
                @endforeach
            </spen>
    </div>
</div>