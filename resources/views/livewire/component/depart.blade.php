<div class="grid grid-cols-3 gap-8 mt-10 ">
    @foreach($sections as $section)
    <div class="shadow-lg">
        <div>
            <img src="{{$section->getMedia()[0]['original_url']}}" alt="" srcset="">
        </div>
        <div class="text-xl text-gray-600 py-4 text-center ">
            {{$section->nom}}
        </div>
    </div>
    @endforeach
</div>
