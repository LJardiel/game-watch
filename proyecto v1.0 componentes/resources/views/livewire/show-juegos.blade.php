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
            <div class="bg-rojo overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                <div class="px-10">
                    <x-input type="text" wire:model="buscador"/>
                    <x-button class="ml-4" wire:click="buscar()">{{ __('Buscar') }}</x-button>
                </div>
                <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0">
                    <div class="container xl:max-w-6xl mx-auto px-4">
                        <!-- fila -->
                        <div class="flex flex-wrap flex-row -mx-4 text-center">
                            @foreach($juegos as $juego)
                            <div class="flex-shrink basis-1/4 px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                                <!-- bloque imagen -->
                                <a href="{{route('show-juego',$juego->id)}}">
                                <div class="group mb-12 transform transition duration-300 ease-in-out hover:-translate-y-2">
                                    <div class="w-full inline-block bg-rojo">
                                        <img class="w-full object-cover group-hover:blur-sm" src="{{$juego->boxart}}">
                                        <div class="absolute inset-0 flex justify p-3 invisible group-hover:visible transition group-hover:scale-110 group-hover:translate-x-3 group-hover:translate-y-3">
                                            <img class="rounded h-8 w-8" src="imgs/trophy.png">
                                            <div class="inline-block px-1">
                                                <span class="font-bold font-noto text-negro">{{$juego->logros->count()}}</span>
                                            </div>
                                        </div>
                                    </div>
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
