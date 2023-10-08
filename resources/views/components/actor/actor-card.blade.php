@props(['actor'])


<div class="actor mt-8">
    <a href="/Actors/Actor/{{$actor['id']}}">
        
    <img src="{{$actor['profile_path'] }} " alt="actor1"
    class="hover:opacity-75 transition ease-in-out duration-150">
    
    
    </a>   
    <a href="/Actors/Actor/{{$actor['id']}}">
        <div class="mt-7 text-red-800 font-semibold ">
            {{ $actor['name']}}

         </div>

    </a>       


</div>


