<div class="grid grid-cols-2 gap-10">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        @foreach($even as $evenement)
        <div class=" shadow-2xl">
            <div class="mt-2">
                <img src="{{$evenement->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-64">
            </div>
            <div class="grid grid-cols-3 p-0">
                    <div class="bg-blue-500 h-20 w-28 rounded-lg text-white p-2 m-4">
                        <div class="text-lg text-center font-bold">
                            {{$evenement->date}}
                        </div>
                    </div>
                    <div>
                        <div class="text-gray-900 p-2 ">
                            <div class="text-lg font-bold w-72">
                                {{$evenement->titre}}
                            </div>
                            <div class="flex gap-2 w-72  border-b py-5">
                                <div class="flex gap-1">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path strokre-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>  
                                    </div>
                                    <div class=" text-md">
                                        {{$evenement->heure}}
                                    </div>
                                </div>
                                <div class="flex gap-1">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>                              
                                    </div>
                                    <div>
                                        {{$evenement->lieuEven}} 
                                    </div>
                                </div>
                            </div>
                    
                            <div class="pt-2">
                                {{$evenement->descrip}}  
                            </div>
                        </div>
                    
                    
                    </div>
                
                </div>
            </div>
        @endforeach
</div>

<!-- <div>
<div>
            <img src="{{$evenement->getMedia()[0]['original_url']}}" alt="" srcset="" class="h-64">
        </div>
        <div class="flex gap-2 pb-10">
            <div class="p-3">
                <div class="bg-blue-500 text-white p-5">
                    <div class="text-4xl text-center font-bold">
                        {{$evenement->date}}
                    </div>
                </div>
            </div>
            <div class="text-gray-900 p-2 ">
                <div class="text-2xl">
                    {{$evenement->titre}}
                </div>
                <div class="flex gap-2 border-b py-5">
                    <div class="flex gap-1">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path strokre-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>  
                        </div>
                        <div>
                            {{$evenement->heure}}
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>                              
                        </div>
                        <div>
                            {{$evenement->lieuEven}} 
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                {{$evenement->descrip}}  
                </div>
            </div>
        </div>
</div> -->