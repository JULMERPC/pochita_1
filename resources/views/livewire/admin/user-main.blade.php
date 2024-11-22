<div class="py-2">
    <div class="mx-6 mb-4">
        <h2 class="text-3xl font-bold text-gray-800">Usuarios</h2>
        <div class="mt-2 border-b-2 border-info-600 w-60"></div>
    </div>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg dark:bg-gray-800/50 dark:bg-gradient-to-bl">
            <div class="flex items-center justify-between gap-2 p-2 mb-2 bg-indigo-100 rounded-md">
                <div class="flex w-full gap-2">
                    <!--Input de busqueda   -->
                    <div class="w-2/4 mb-2">
                        <x-input wire:model.live="search" icon="user" placeholder="Buscar registro"/>
                    </div>
                    <!--Filtros   -->
                    <div class="w-1/4 mb-2 text-gray-500">
                        <x-native-select
                            :options="[['name'=>'Activos','id'=>1],['name'=>'Inactivos','id'=>0]]"
                            option-label="name" option-value="id"
                            wire:model.live="active"
                        />
                    </div>
                </div>
                <!--Boton nuevo   -->
                <div>
                    <x-button primary label="Nuevo" icon="plus" wire:click="create()"></x-button>
                    @include('livewire.admin.group-create')
                </div>
            </div>
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                @foreach ($users as $user)
                <div class="w-full relative bg-blue-50 p-4 rounded-md shadow-lg h-40 motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div class="absolute top-0 left-0 w-full py-1 text-center text-white bg-gray-600 rounded-t-lg text-md">
                        <i class="fa-solid fa-quote-left"></i> {{$user->name}} <i class="fa-solid fa-quote-right"></i>
                    </div>
                    <div class="flex h-full gap-4 mt-2 text-sm">
                        <div class="flex items-center">
                            <i class="text-3xl fa-solid fa-globe text-cyan-700"></i>
                        </div>
                        <div class="flex items-center h-full col-span-2">
                            <div>
                                <div><span class="font-bold text-indigo-600">id: </span> {{$user->motto}}</div>
                                <div><span class="font-bold text-indigo-600">name: </span> {{$user->name}}</div>
                                <div><span class="font-bold text-indigo-600">Canto:</span> {{$user->email}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-2 right-2">
                        <x-mini-button rounded primary icon="pencil" wire:click="edit({{$user}})"/>
                        @if ($active==1)
                            <x-mini-button rounded negative icon="x-mark" wire:click="confirmSimple({{$user}})"/>
                        @else
                            <x-mini-button rounded warning icon="exclamation-triangle" wire:click="renovate({{$user}})"/>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-2">
                @if(!$users->count())
                <x-alert title="* No existe ningun registro coincidente" info />
                @endif
            </div>
        </div>
        <div class="mt-2">
            {{$users->links()}}
        </div>
    </div>
</div>