<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <!--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Juegos') }}
        </h2>
    </x-slot>
    -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-rojo shadow-xl">
                <!-- Inicia -->
                <div class="container mx-auto my-5 p-5">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Izquierda -->
                        <div class="w-full md:w-3/12 md:mx-2">
                            <!-- Card Juego -->
                            <div class="bg-negro p-3">
                            <div class="image overflow-hidden">
                                            <img class="h-auto w-full mx-auto"
                                                src="{{$juego->boxart}}"
                                                alt="">
                                        </div>
                                <h1 class="text-blanco font-bold text-2xl leading-8 my-1">{{$juego->titulo}}</h1>
                                <h3 class="text-blanco font-lg text-semibold text-xl leading-6">{{$juego->consola}}</h3>
                                        <p class="text-sm text-negrito leading-6">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                            </div>
                            <!-- Fin Card -->
                            
                        </div>
                        <!-- Lado derecho -->
                        <div class="w-full md:w-9/12 mx-2 h-auto">
                            <div class="bg-negro p-3 shadow-sm mb-2 pb-2">
                                <div class="flex items-center space-x-2 px-5 font-bold text-xl text-blanco leading-8">
                                <img class="fill-current w-8 h-8 mr-2" src="/imgs/trophy.png">{{$juego->logros->count()}}<span class="tracking-wide">logros</span>
                                </div>
                                @foreach($juego->logros->sortBy('titulo') as $logro)
                                <div class="text-blanco transition group hover:translate-x-2 shadow-xl">
                                    <a href="{{route('show-logro',$logro->id)}}">
                                    <div class="flex items-center w-full justify-start bg-negrito  border-b-4 border-b-negro border-t-4 border-t-gray-500 hover:bg-gray-500 hover:border-b-negrito hover:border-t-blanco my-2">
                                        <div class="flex items-center justify-between h-24 text-blanco">
                                            <img class="h-full py-2 pr-4 ml-8" src="{{$logro->imagen}}"></img>
                                            <div class="flex flex-col px-4">
                                                <p class="text-base font-semibold">{{$logro->titulo}}</p>
                                                <span class="text-xs">{{$logro->descripcion}}</span>
                                            </div>

                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="my-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
