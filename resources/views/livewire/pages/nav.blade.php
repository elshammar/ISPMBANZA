<div class="w-screen" 
x-data="{
    voir : false
}">
    <div class="block lg:hidden" x-cloak x-show="voir">
        <div class="bg-white ml-32 absolute top-24 right-0 w-full ">
            <ul class="text-xl py-5 px-2">
                <li><a href="" class="my-2">Accueil</a></li>
                <li><a href="">a propos</a></li>
                <li><a href="">evenements</a></li>
                <li><a href="">sections</a></li>
                <li><a href="">revues</a></li>
                <li><a href="">contact</a></li>
            </ul>
        </div>
    </div>
    <div class="flex justify-between px-5 lg:px-40 border border-1 border-gray-800 py-3  gap-0 items-center" id="nav">
        <div class="flex items-center gap-20 ">

            {{-- logo site --}}
            <div class="">
                <a href="{{route('home')}}"><img src="{{asset('assets/imgs/log.png')}}" alt="" srcset="" class="w-16"></a>
            </div>

            {{-- liens pages --}}
            <div class="hidden lg:flex gap-10   text-xl text-white  lg:text-lg" >
                <div class=""><a href="{{route('home')}}" class="">ACCUEIL</a></div>
                <div><a href="{{route('about')}}">A PROPOS</a></div>
                <div class=""><a href="{{route('evenement')}}">EVENEMENTS</a></div>
                <div><a href="{{route('section')}}">SECTIONS</a></div>
                <div><a href="{{route('article')}}">REVUES</a></div>
                <div><a href="{{route('contact')}}">CONTACT</a></div>
            </div>
        </div>

        {{-- liens reseaux nav --}}
        <div class="flex justify-center gap-2 items-center border-l-4 pl-3">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 48 48" class="text-white w-6 hidden lg:block">
                    <path d="M 27.689453 2.0371094 C 24.410243 2.0371094 21.627143 3.0524604 19.751953 5.0898438 C 17.876763 7.1272271 16.998047 10.032839 16.998047 13.5 L 16.998047 17 L 13.517578 17 C 11.589931 17 9.9985023 18.604801 10.017578 20.533203 L 10.046875 23.537109 A 1.50015 1.50015 0 0 0 10.046875 23.539062 C 10.069385 25.440659 11.647206 27.005642 13.550781 27.003906 L 17 27.001953 L 17 43.5 C 17 45.414955 18.585045 47 20.5 47 L 24.5 47 C 26.414955 47 28 45.414955 28 43.5 L 28 27 L 31.095703 27 C 32.859472 27 34.367374 25.656297 34.572266 23.904297 L 34.921875 20.904297 C 35.160419 18.850746 33.513658 17 31.445312 17 L 28.019531 17 L 28.0625 13.712891 A 1.50015 1.50015 0 0 0 28.0625 13.693359 C 28.0625 13.00752 28.583692 12.486328 29.269531 12.486328 L 32.177734 12.486328 C 33.735895 12.486328 35.03125 11.190973 35.03125 9.6328125 L 35.03125 5.0625 C 35.03125 3.596878 33.891093 2.3503008 32.433594 2.21875 A 1.50015 1.50015 0 0 0 32.429688 2.21875 C 32.145313 2.1938679 30.177903 2.0371094 27.689453 2.0371094 z M 27.689453 5.0371094 C 29.967263 5.0371094 32.01319 5.2007464 32.03125 5.2011719 L 32.03125 9.4863281 L 29.269531 9.4863281 C 26.963371 9.4863281 25.0625 11.387199 25.0625 13.693359 L 25 18.480469 A 1.50015 1.50015 0 0 0 26.5 20 L 31.445312 20 C 31.770968 20 31.978863 20.236144 31.941406 20.558594 L 31.59375 23.556641 C 31.562642 23.82264 31.361935 24 31.095703 24 L 26.5 24 A 1.50015 1.50015 0 0 0 25 25.5 L 25 43.5 C 25 43.795045 24.795045 44 24.5 44 L 20.5 44 C 20.204955 44 20 43.795045 20 43.5 L 20 25.5 A 1.50015 1.50015 0 0 0 18.5 24 L 13.548828 24.003906 A 1.50015 1.50015 0 0 0 13.546875 24.003906 C 13.257582 24.00417 13.051932 23.798417 13.046875 23.505859 L 13.017578 20.503906 C 13.014704 20.208314 13.221226 20 13.517578 20 L 18.498047 20 A 1.50015 1.50015 0 0 0 19.998047 18.5 L 19.998047 13.5 C 19.998047 10.534161 20.731877 8.4584135 21.960938 7.1230469 C 23.189996 5.7876802 25.001663 5.0371094 27.689453 5.0371094 z"></path>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 32 32" class="w-6 hidden lg:block">
                    <path d="M 11 7 C 6.027344 7 2 11.027344 2 16 C 2 20.972656 6.027344 25 11 25 C 15.972656 25 20 20.972656 20 16 C 20 15.382813 19.933594 14.78125 19.8125 14.199219 L 19.765625 14 L 11 14 L 11 17 L 17 17 C 16.523438 19.835938 13.972656 22 11 22 C 7.6875 22 5 19.3125 5 16 C 5 12.6875 7.6875 10 11 10 C 12.5 10 13.867188 10.554688 14.921875 11.464844 L 17.070313 9.359375 C 15.46875 7.894531 13.339844 7 11 7 Z M 25 11 L 25 14 L 22 14 L 22 16 L 25 16 L 25 19 L 27 19 L 27 16 L 30 16 L 30 14 L 27 14 L 27 11 Z"></path>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 50 50" class="w-6 hidden lg:block">
                    <path d="M 8 3.0117188 C 6.3126093 3.0117188 4.8354789 3.4916328 3.7539062 4.3652344 C 2.6723337 5.238836 2.0117188 6.533218 2.0117188 7.9472656 C 2.0117188 10.690836 4.4687078 12.814467 7.7167969 12.941406 A 0.98809878 0.98809878 0 0 0 8 12.988281 C 9.753566 12.988281 11.246191 12.474267 12.3125 11.564453 C 13.378809 10.654639 13.988281 9.3429353 13.988281 7.9472656 A 0.98809878 0.98809878 0 0 0 13.986328 7.8925781 C 13.832307 5.1316834 11.374781 3.0117187 8 3.0117188 z M 8 4.9882812 C 10.60907 4.9882812 11.895883 6.2693448 12.005859 7.9726562 C 11.998759 8.8049335 11.676559 9.5118991 11.03125 10.0625 C 10.378809 10.619186 9.371434 11.011719 8 11.011719 C 5.3980542 11.011719 3.9882813 9.5991704 3.9882812 7.9472656 C 3.9882812 7.1213132 4.3276663 6.4422421 4.9960938 5.9023438 C 5.6645211 5.3624454 6.6873907 4.9882813 8 4.9882812 z M 3 15 A 1.0001 1.0001 0 0 0 2 16 L 2 45 A 1.0001 1.0001 0 0 0 3 46 L 13 46 A 1.0001 1.0001 0 0 0 14 45 L 14 35.664062 L 14 16 A 1.0001 1.0001 0 0 0 13 15 L 3 15 z M 18 15 A 1.0001 1.0001 0 0 0 17 16 L 17 45 A 1.0001 1.0001 0 0 0 18 46 L 28 46 A 1.0001 1.0001 0 0 0 29 45 L 29 29 L 29 28.75 L 29 28.5 C 29 26.555577 30.555577 25 32.5 25 C 34.444423 25 36 26.555577 36 28.5 L 36 45 A 1.0001 1.0001 0 0 0 37 46 L 47 46 A 1.0001 1.0001 0 0 0 48 45 L 48 28 C 48 23.873476 46.787888 20.604454 44.744141 18.375 C 42.700394 16.145546 39.849212 15 36.787109 15 C 32.882872 15 30.521631 16.426076 29 17.601562 L 29 16 A 1.0001 1.0001 0 0 0 28 15 L 18 15 z M 4 17 L 12 17 L 12 35.664062 L 12 44 L 4 44 L 4 17 z M 19 17 L 27 17 L 27 19.638672 A 1.0001 1.0001 0 0 0 28.744141 20.306641 C 28.744141 20.306641 31.709841 17 36.787109 17 C 39.360007 17 41.615528 17.922268 43.269531 19.726562 C 44.923534 21.530858 46 24.261524 46 28 L 46 44 L 38 44 L 38 28.5 A 1.0001 1.0001 0 0 0 37.916016 28.089844 C 37.694061 25.26411 35.38033 23 32.5 23 C 29.474423 23 27 25.474423 27 28.5 L 27 28.75 L 27 29 L 27 44 L 19 44 L 19 17 z"></path>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 block lg:hidden cursor-pointer" @click="voir=!voir">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>                  
            </div>
        </div>
    </div>
</div>
