<x-layout>
    

    <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
        <div>
            <header class="mb-2 text-red-500 bold"> popular  tv shows </header>
            </div>

            <div class="lg:grid lg:grid-cols-5">
                @foreach ($popularTv as $show)
                <x-show.show-card :show="$show"/>
                @endforeach
            </div>

    </main>
    </x-layout>
