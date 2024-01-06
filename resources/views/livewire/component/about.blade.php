<div>
    {{-- Stop trying to control. --}}
    <div class="px-40 h-screen flex justify-center pt-24 items-center">
        <div class="grid grid-cols-6 gap-10">
            <div class="flex flex-col gap-8 col-span-3 justify-center"> 
                <h1 class="text-5xl text-blue-900 font-bold">
            @foreach ($apropos as $apropo)
                    <div>{{ $apropo->titre}}</div>
                
                </h1>
                <div class="text-xl text-justify">
                
                    <div>{{ $apropo->descrip }}</div>
            
                </div>
                <div class="bg-yellow-400 p-3 w-32 text-center">
                    Lire plus...
                </div>
            </div>
            <div class=" col-span-3">
                <img src="{{$apropo->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-64">
                
            </div>
            @endforeach
        </div>
    </div>
    
</div>
