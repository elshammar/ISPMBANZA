<div class="grid grid-grid-cols-1 lg:grid-cols-3 gap-8 mt-10 ">
    @foreach($sections as $section)
    <div class="shadow-lg">
        <a href="{{route('section',['id'=>$section->id])}}">
            <div>
                <img src="{{$section->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-64 w-full">
            </div>
            <div class="text-xl text-gray-600 py-4 text-center ">
                {{$section->nom}}
            </div>
        </a>
    </div>
    @endforeach
</div>
