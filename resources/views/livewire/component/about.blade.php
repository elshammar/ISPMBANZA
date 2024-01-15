<div>
    {{-- Stop trying to control. --}}
    <div class="lg:px-40 py-32 my-32 lg:h-screen flex justify-center lg:items-center" style="background-image:url('{{asset('/assets/imgs/bg (copie)/blob2.png')}}')">
        <div class="grid grid-cols-1 lg:grid-cols-6 px-8 lg:gap-10" style="background-image:url('')">
            <div class="flex flex-col gap-8 col-span-3 justify-center"> 
                <h1 class="text-5xl text-blue-900 font-bold">
                    <div>{{ $apropos[0]->titre}}</div>
                
                </h1>
                <div class="text-xl text-justify">
                    <div>{{substr($apropos[0]->descrip,0,208)  }}...</div>
                </div>
                <div >
                    <a href="{{route('about')}}" class="bg-blue-900 w-20 text-white py-2 px-2 text-sm">Lire Plus...</a>
                </div>
            
            </div>
            <div class="col-span-3 my-10">
                <img src="{{$apropos[0]->getMedia()[0]['original_url']}}" alt="" srcset="" >    
            </div>
        </div>
    </div>
    
</div>
