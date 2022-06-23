<x-app-layout>
    <!--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Juegos') }}
        </h2>
    </x-slot>
    -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-rojo shadow-xl sm:rounded-lg p-6">
                <!-- Inicia -->
                <div class="container mx-auto my-5 p-5">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Izquierda -->
                        <div class="w-full md:w-3/12 md:mx-2">
                            <!-- Card Juego -->
                            <div class="bg-negro rounded p-3">
                            <div class="image overflow-hidden">
                                            <img class="h-auto w-full mx-auto"
                                                src="{{$juego->boxart}}"
                                                alt="">
                                        </div>
                                <h1 class="text-blanco font-bold text-xl leading-8 my-1">{{$juego->titulo}}</h1>
                                <h3 class="text-blanco font-lg text-semibold leading-6">Lorem ipsum dolor sit amet</h3>
                                        <p class="text-sm text-negrito leading-6">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit.
                                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                                        <ul
                                            class="bg-negrito text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                            <li class="flex items-center py-3 pl-5">
                                                <span><img class="rounded h-8 w-8" src="/imgs/trophy.png"></span>
                                                <span class="ml-auto pr-5">
                                                    <span class="py-1 px-2 rounded text-blanco text-sm">Cantidad de logros: {{$juego->logros->count()}}</span>
                                                </span>
                                            </li>
                                        </ul>
                            </div>
                            <!-- End of profile card -->
                            
                        </div>
                        <!-- Right Side -->
                        <div class="w-full md:w-9/12 mx-2 h-auto">
                            <!-- Profile tab -->
                            <!-- About Section -->
                            <div class="bg-negro p-3 shadow-sm mb-2 pb-2 rounded-sm">
                                <div class="flex items-center space-x-2 px-10 font-bold text-xl text-blanco leading-8">
                                    <span class="tracking-wide">Logros</span>
                                </div>
                                @foreach($juego->logros->sortBy('titulo') as $logro)
                                <div class="text-blanco transition group hover:translate-x-2 shadow-xl">
                                    <a href="{{route('logros.show',$logro->id)}}">
                                    <div class="flex items-center w-full justify-start bg-negrito rounded my-2">
                                        <div class="flex items-center justify-between h-24 text-blanco rounded-lg">
                                            <img class="h-full py-2 pr-4 ml-8" src="/logro/3.webp"></img>
                                            <div class="flex flex-col px-4">
                                                <p class="text-md font-semibold">{{$logro->titulo}}</p>
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
</x-app-layout>