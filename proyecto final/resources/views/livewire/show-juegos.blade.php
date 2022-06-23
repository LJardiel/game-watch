<div>
        <!--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Juegos') }}
        </h2>
    </x-slot>
    -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-rojo overflow-hidden shadow-xl">
                <div class="container mx-auto my-5 p-5">
                <div class="px-6 inline-flex w-full">
                    <x-input class="w-auto flex-auto" type="text" wire:model="buscador"/>
                    <x-button wire:click="buscar()"><img class="fill-current w-6 h-6 mr-2" src="/imgs/catalejo.webp"><span>{{ __('Buscar') }}</span></x-button>
                </div>
                <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0">
                    <div class="container xl:max-w-6xl mx-auto px-4">
                        <!-- fila -->
                        <div class="flex flex-wrap flex-row -mx-4 text-center">
                            @foreach($juegos->sortBy('titulo') as $juego)
                            <div class="flex-shrink basis-1/4 px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                                <!-- bloque imagen -->
                                <a href="{{route('show-juego',$juego->id)}}">
                                <div class="group shadow-xl mb-12 transform transition duration-300 ease-in-out hover:-translate-y-2">
                                    <img class="w-full object-cover group-hover:blur-sm" src="{{$juego->boxart}}">
                                        <div class="absolute left-0 top-0 invisible group-hover:visible transition group-hover:scale-110 group-hover:translate-x-3 group-hover:translate-y-3">
                                            <img class="rounded h-8 w-8" src="/imgs/trophy.png">
                                            <div>
                                                <span class="font-bold font-noto text-negro">{{$juego->logros->count()}}</span>
                                            </div>
                                        </div>
                                        <div class="absolute right-0 top-0 invisible group-hover:visible transition group-hover:scale-110 group-hover:-translate-x-3 group-hover:translate-y-3">
                                            <img class="rounded h-8 w-8" src="/imgs/book.webp">
                                            <div>
                                                <span class="font-bold text-md font-noto text-negro"><!--Aqui queriamos que muestre el numero de guias-->0</span>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 w-full text-md bg-negro opacity-75 text-blanco p-2 group-hover:opacity-100"><p class="font-bold">{{$juego->titulo}}</p><p>{{$juego->consola}}</p></div>
                                </div>
                                </a>
                                <!-- end service block -->
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- end row -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
