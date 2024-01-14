<div class="px-8 lg:px-40 py-32">
    <h1 class="text-5xl font-bold text-gray-900 border-l-4 pl-5 border-blue-800">
        A propos
    </h1>
    <div class=""> 
            @foreach ($apropos as $apropo)
                <h1 class="text-2x text-blue-900 font-bold mt-5">
                    <div>{{ $apropo->titre}}</div>
                </h1>
                <div class="text-xl text-justify">
                    <div>{{ $apropo->descrip }}</div>
                </div>
                <div>
                    <img src="{{$apropo->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-64 w-full">
                </div>
            @endforeach
    </div>
</div>
