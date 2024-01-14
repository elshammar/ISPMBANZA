<div class="bg-cover" style="background-image: url('assets/imgs/i.jpg')" >
    <div class="h-screen w-full bg-gray-900 opacity-80">
        <div class="fixed z-50"style="">
            <livewire:pages.nav>
        </div> 

        {{-- Nav --}}

        {{-- Code header --}}
        <div class="text-white flex py-20 lg:px-40 h-full w-full justify-between  items-center">
            <div class=" text-6xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                  
            </div>
            <div class="lg:px-28 flex flex-col justify-center text-center items-center gap-3 font-bold">
                <div class="text-xl">
                    L'education est la base de la partie
                </div>
                <div class="text-4xl md:text-6x">
                    BIENVENUE SUR LE PORTAIL DE L'ISP DE MBANZA-NGUNGU
                </div>
                <div>
                    Le meileur cadre pour votre apprentissage Univertitaire
                </div>
                
            </div>
            <div class=" ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                  
            </div>
        </div>
    </div>

    {{-- images gallerie dans header --}}
    <div class="">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5  lg:px-40 w-full relative bottom-32 z-10 px-8">

            {{-- <livewire:component.cardheader/> --}}
{{--             <livewire:component.cardheader/>
            <livewire:component.cardheader/> --}}

{{--             @foreach ($galerie as $galeries)
            <div class=" col-span-3">
                <img src="{{$galeries->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-72 w-full">
            </div>
            @endforeach --}}
        </div>
    </div>
</div>
