<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="py-32 bg-blue-500 font-bold text-5xl text-white text-center">
        {{$details->nom}}
    </div>
    <div class="grid grid-cols-3 gap-4 px-10 my-20">
        @foreach($departement as $depart)
            @if ($depart != null)
                <div class="grid shadow-lg py-3">
                    <div>
                        <div>
                            <img src="{{$depart->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-64 w-full">
                        </div>
                    </div>
                        
                    <div class="text-center">
                        {{$depart->nom}}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
