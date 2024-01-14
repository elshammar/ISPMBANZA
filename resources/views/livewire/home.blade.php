<div>
    {{-- Code header --}}
        <div>
            <div>
                <livewire:pages.header>
            </div>

            {{-- Code about --}}
            <div class="text-gray-600 bg-gray-300">
                <livewire:component.about>
            </div>
            <div class="px-8 lg:px-40 lg:my-10">
                <h1 class="text-5xl uppercase text-blue-900 font-bold">Sections</h1>
                <p class="text-justify text-xl text-gray-600 lg:py-5">
                    Les programmes de formation dispensés par la section visent à former des professionnels capables de s'insérer dans le monde du travail et de contribuer au développement du pays. Ils sont axés sur l'acquisition de connaissances
                    théoriques et pratiques dans le domaine de la pedagogie.
                </p>
            </div>
            {{-- Code section version juste dans home --}}
            <div class="px-8 lg:px-40 lg:pb-20">
                <livewire:component.depart> 
            </div>
    
            {{-- Code notre institution --}}
            <div class="h-5/6 mt-20 bg-cover " style="background-image: url('assets/imgs/w.jpeg')">
                <div class="bg-blue-950 opacity-85 h-full px-8 lg:px-40 py-32">
                    <h1 class="text-5xl text-white text-center">
                        <span class="font-bold"> Pourquoi choisir</span> notre institution ?
                    </h1>
                    <div class="grid grid-cols-1 lg:grid-cols-3 text-white text-xl mt-40 gap-20">
                        <div class="flex flex-col gap-5 justify-center items-center ">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                            </div>
                            <div class="text-justify ">
                                Former les enseignants qualifiés du secondaire dans toutes les disciplines de formation générale, technique, artistique et professionnelle
                            </div>
                        </div>
                        <div class="flex flex-col gap-5 justify-center items-center ">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>                          
                            </div>
                            <div class="text-justify">
                                Organiser la recherche dans le domaine de la pédagogie appliquée afin d’améliorer la qualité de l’enseignement maternel, primaire, secondaire et professionnel
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-5">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>                          
                            </div>
                            <div class="text-justify">
                                Vulgariser les résultats de la recherche notamment par la production et la diffusion des manuels scolaires adaptés.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Code Evenements/actualites --}}
            <div class="h-screen px-8 lg:px-40 py-20">
                <div class="flex flex-col gap-8 pb-10">
                    <h1 class="text-5xl text-blue-900 text-start">
                        <span class="font-bold"> Evenements</span> Future
                    </h1>
                    <div class="text-2xl text-gray-600 text-start">
                        Participer aux conférences et autres activités pour rester à jour
                    </div>
                </div>
                <div class="lg:px-20">
                    <div>
                        <livewire:component.even>
                    </div>  
                </div>
                <div class="flex justify-center items-center py-16">
                    <div class="bg-yellow-500 text-white w-54 p-3 rounded-md">
                        <a href="">Touts les evenements ...</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Code temoignages anciens etudiants --}}
        <div>
            <livewire:pages.temoignages>
        </div>

        {{-- Code Revue/article --}}
        <div class=" py-20 h-screen px-8 lg:px-40 mb-80">
            <div>
                <h1 class="text-5xl font-bold text-gray-900 border-l-4 pl-5 mb-5 border-blue-600">
                    <span class="font-bold">Nos </span>  Artices
                </h1>
                <div class="flex justify-between pb-20">
                    <div class="text-gray-900 text-2xl">
                        Retrouver l'ensemble de nos articles dans cette section
                    </div>
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
            </div>
            {{-- Code grid article --}}
{{--             <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                      <ul class="splide__list">
                          <li class="splide__slide">Slide 01</li>
                          <li class="splide__slide">Slide 02</li>
                          <li class="splide__slide">Slide 03</li>
                      </ul>
                </div>
            </section> --}}


            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                @foreach($article as $articles)
                {{-- Code article1 --}}
                <div class="shadow-xl">
                    <div class="mb-5">
                        <img src="{{$articles->getMedia()[0]['original_url']}}" alt="" srcset="" class="w-full h-48">
                    </div>
                    <div class="p-3">
                        <div class="flex gap-10 border-b pb-3  w-70 text-xs text-blue-600 font-bold">
                            <div class="flex gap-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>                                  
                                </div>
                                <div>
                                    {{$articles->date}}
                                </div>
                            </div>
                            <div class="flex gap-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>                                  
                                </div>
                                <div >
                                    {{$articles->auteur}}
                                </div>
                            </div>
                        </div>
                        <div class="text-2xl text-gray-900 py-3">
                            {{$articles->titre}}
                        </div>
                        <div class="text-gray-900 text-justify border-b pb-3">
                            {{substr($articles->descrip,0,25)}}
                        </div>
                    </div>
                    <div class="text-red-400 font-bold text-xl pb-3 px-3">
                        Lire plus...
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
        {{-- Code footer --}}
        <div>
            <livewire:pages.footer>
        </div> 
</div>
<script>
    const scrolling = ()=>{
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600)
            document.querySelector('#nav').classList.add('bg-black');
        else 
            document.querySelector('#nav').classList.remove('bg-black');
    }
    window.addEventListener("scroll",scrolling)
</script>
