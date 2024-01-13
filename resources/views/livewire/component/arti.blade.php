<div class="grid grid-cols-3 gap-10 ">
    @foreach($articles as $article)
    <div class=" shadow-2xl col-span-1">
        <div class="mb-5">
            <img src="{{$article->getMedia()[0]['original_url']}}" alt="" srcset="">
        </div>
        <div class="p-3">
            <div class="flex gap-10 border-b pb-3 w-70 text-xs text-blue-600 font-bold">
                <div class="flex gap-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>                                  
                    </div>
                    <div>
                        {{$article->date}}
                    </div>
                </div>
                <div class="flex gap-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>                                  
                    </div>
                    <div>
                        {{$article->auteur}}
                    </div>
                </div>
            </div>
            <div class="text-2xl text-gray-900 py-3">
                {{$article->titre}}
            </div>
            <div class="text-gray-900 text-justify border-b pb-3">
                {{$article->descrip}}
            </div>
        </div>
        <div class="text-red-400 font-bold text-xl pb-3 px-3">
            Lire plus...
        </div>
    </div>
    @endforeach
</div>
