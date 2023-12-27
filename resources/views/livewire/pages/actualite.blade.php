<div class="h-screen py-20">
    <div class="flex flex-col gap-8 pb-10">
        <h1 class="text-5xl text-gray-900 text-center">
            <span class="font-bold"> Evenements</span> Future
        </h1>
        <div class="text-2xl text-gray-900 text-center">
            Participer aux conférences et autres activités pour rester à jour
        </div>
    </div>

    {{-- grid des card Evenements/actualites --}}
    <div class="grid grid-cols-3 gap-5 px-20">
        <div>
            <livewire:component.actu>
        </div>
        <div>
            <livewire:component.actu>
        </div>
        <div>
            <livewire:component.actu>
        </div>
    </div>
        
</div>
