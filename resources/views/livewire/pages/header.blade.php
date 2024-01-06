<div class="h-screen bg-cover" style="background-image: url('assets/imgs/i.jpg')" >
    <div class=" h-screen w-full bg-gray-900 opacity-80 ">

        {{-- Nav --}}
        <div>
            <livewire:pages.nav>
        </div> 

        {{-- Code header --}}
        <div class="text-white flex py-20 px-40 h-full w-full justify-between  items-center">
            <div class=" text-6xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                  
            </div>
            <div class="px-52 flex flex-col justify-center text-center items-center gap-8 text-2xl  font-bold">
                <div >
                    L'education est la base de la partie
                </div>
                <div class="text-6xl">
                    BIENVENUE SUR LE PORTAIL DE L'ISP DE MBANZA-NGUNGU
                </div>
                <div>
                    Le meileur cadre pour votre apprentissage Univertitaire
                </div>
                
            </div>
            <div class=" ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                  
            </div>
        </div>
    </div>

    {{-- images gallerie dans header --}}
    <div class=" " style="position: absolute; top:80%">

        <div class="grid grid-cols-12 gap-8 px-40 w-full">
            @foreach ($galerie as $galeries)
            <div class=" col-span-3">
                <img src="{{$galeries->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-72 w-full">
            </div>
            @endforeach
        </div>
    </div>
</div>
