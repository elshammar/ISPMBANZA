<div>
    {{-- Success is as dangerous as failure. --}}
    <div class=" h-5/6 mt-20 bg-cover " style="background-image: url('assets/imgs/w.jpeg')">
        <div class="bg-black opacity-85 h-full px-40 py-32">
            <div class="flex justify-between pb-20">
                <h1 class="text-5xl font-bold text-white border-l-4 pl-5 border-blue-600">
                    Nos anciens etudiants parlent de Nous
                </h1>
                <div class="flex gap-2">
                    <div class="bg-blue-700 text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>                          
                    </div>
                    <div class="bg-blue-700  text-white p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>                          
                    </div>
                </div>
            </div>

            {{-- Code du premier card temoignage --}}
            <div class="grid grid-cols-2 px-10 gap-24">
                @foreach ($temoignages as $temoignage)
                <div class="bg-white p-5 grid grid-cols-12 gap-3">
                        <div class="col-span-1">
                            <div class=" rounded-full p-1 w-28 absolute left-40">
                                <img src="{{$temoignage->getMedia()[0]['original_url']}}" alt="" srcset="" class="w-28 rounded-full h-24 border-2 shadow-lg">
                            </div>
                        </div>
                        <div class=" col-span-11 p-3">
                            <div class="flex justify-between">
                                <div class="flex flex-col gap-2 pb-5">
                                    <div class="text-gray-900 text-3xl">
                                        {{$temoignage->auteur}}
                                    </div>
                                    <div class="text-gray-600 text-2xl">
                                        {{$temoignage->titre}}
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                            <div class="text-gray-900 text-xl">
                                {{$temoignage->descrip}}
                            </div>
                        </div>
                    </div>
                

                @endforeach
            </div>
        </div>
    </div>
</div>
