<x-layout>
    <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
        <div>
            <header class="mb-2 text-red-800 font-semibold"> Trending Actors  </header>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($TrendingActors as $actor)
                <x-actor.actor-card :actor="$actor" />
                @endforeach

            </div>
            <div>
    </main>

    <div class="page-load-status">
        <div class="flxe justify-between ">
            <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div> 
        </div>
              
        <p class="infinite-scroll-last">End of content</p>
        <p class="infinite-scroll-error">No more pages to load</p>
      </div>
    
    @section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.grid');
        let infScroll = new InfiniteScroll( elem, {
          // options
          path: 'Actors/page/@{{#}}',
          append: '.actor',
          status: '.page-load-status'
        //   history: false,
        });
    </script>
@endsection
    </x-layout>
