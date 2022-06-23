<div>
    {{-- Stop trying to control. --}}
            <!--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Juegos') }}
        </h2>
    </x-slot>
    -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-rojo shadow-xl ">
                <!-- Inicia -->
                <div class="container mx-auto my-5 p-5">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Izquierda -->
                        <div class="w-full md:w-3/12 md:mx-2">
                            <!-- Card Juego -->
                            <div class="bg-negro p-3">
                            <div class="image overflow-hidden">
                                            <img class="h-auto w-full mx-auto"
                                                src="/logro/3.webp"
                                                alt="">
                                        </div>
                                <h1 class="text-blanco font-bold text-xl leading-8 my-1">{{$logro->titulo}}</h1>
                                <h3 class="text-blanco font-lg text-semibold leading-6">{{$logro->juego->titulo}}</h3>
                                        <p class="text-sm text-negrito leading-6">{{$logro->descripcion}}</p>
                                        <ul
                                            class="bg-negrito text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y shadow-sm">
                                            <li class="flex items-center py-3 pl-5">
                                                <span><img class="h-8 w-8" src="/imgs/book.webp"></span>
                                                <span class="ml-auto pr-5">
                                                    <span class="py-1 px-2 text-blanco text-sm">Cantidad de guías: {{$logro->guias->count()}}</span>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="place-items-center">
                                        <div class="flex place-content-center p-2">
                                        @livewire('crear-guia',['logro'=>$logro])
                                        </div>
                                        </div>
                            </div>
                            <!-- End of profile card -->
                            
                        </div>
                        <!-- Lado derecho -->
                        <div class="w-full md:w-9/12 mx-2 h-auto">
                            <div class="bg-negro p-3 shadow-sm mb-2 pb-2">
                                <div class="space-x-2 px-10 font-bold text-xl text-blanco leading-8">
                                    <span class="tracking-wide">Guías escritas</span>
                                </div>
                                @foreach($logro->guias->sortBy('titulo') as $guia)
                                    <div class="flex items-center w-full justify-start bg-negrito my-2">
                                        <div class="flex items-center justify-between h-24 text-blanco ">
                                            <div class="flex flex-col px-4">
                                                <p class="text-md font-semibold">{{$guia->titulo}}</p>
                                                <span class="text-xs">Escribió: {{$guia->user->name}}</span>
                                                <span class="text-xs">{{$guia->instrucciones}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if (Route::has('login'))
                                        @auth
                                        @if ($guia->user_id==Auth::user()->id)
                                        <div class="flex items-center justify-end">
                                        <x-button class="shadow shadow-blanco/50" wire:click="$emit('destroy', {{$guia->id}})">Borrar guía <img class="h-8 w-8 m-1" src="/imgs/book_and_quill.webp"></x-button>
                                        <x-button class="shadow shadow-blanco/50" wire:click="$emit('editarGuia', {{$guia->id}})">Editar guía <img class="h-8 w-8 m-1" src="/imgs/book_and_quill.webp"></x-button>
                                        </div>
                                        @endif
                                        @endauth
                                        @endif
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
