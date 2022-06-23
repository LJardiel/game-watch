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
            <div class="bg-rojo shadow-xl">
                <!-- Inicia -->
                <div class="container mx-auto my-5 p-5">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Izquierda -->
                        <div class="w-full md:w-2/12 md:mx-2">
                            <!-- Card Logro -->
                            <div class="bg-negro p-3">
                            <div class="image overflow-hidden">
                                            <img class="h-32 w-32 mx-auto"
                                                src="{{$logro->imagen}}"
                                                alt="">
                                        </div>
                                <h1 class="text-blanco font-bold text-xl leading-8 my-1">{{$logro->titulo}}</h1>
                                <h3 class="text-blanco font-lg text-semibold leading-6">{{$logro->juego->titulo}}</h3>
                                        <p class="text-sm text-negrito leading-6">{{$logro->descripcion}}</p>
                                        <div class="place-items-center">
                                        <div class="flex place-content-center p-2">
                                        @livewire('crear-guia',['logro'=>$logro])
                                        </div>
                                        </div>
                            </div>
                            <!-- Card Logro -->
                            
                        </div>
                        <!-- Lado derecho -->
                        <div class="w-full md:w-10/12 mx-2 h-auto">
                            <div class="bg-negro p-3 shadow-sm mb-2 pb-2">
                                <div class="flex items-center space-x-2 px-5 font-bold text-xl text-blanco leading-8">
                                    <img class="fill-current w-8 h-8 mr-2" src="/imgs/book.webp">{{$logro->guias->count()}}<span class="tracking-wide">guías escritas</span>
                                </div>
                                @foreach($logro->guias->sortByDesc('updated_at') as $guia)
                                    <div class="w-full h-auto justify-start bg-negrito my-4">
                                        <div class="items-center justify-between h-auto text-blanco ">
                                            <div class="px-4">
                                                <p class="text-md font-semibold">{{$guia->titulo}}</p>
                                                <p class="text-xs">Escribió: {{$guia->user->name}}</p>
                                                <hr class="my-2"/>
                                                <p class="text-xs">{{$guia->instrucciones}}</p>
                                                <hr class="my-2"/>
                                            </div>
                                        </div>
                                        @if (Route::has('login'))
                                        @auth
                                        @if ($guia->user_id==Auth::user()->id)
                                        <div class="p-2 flex items-center justify-end">
                                        <x-button class="mr-2" wire:click="$emit('editarGuia', {{$guia->id}})"><img class="fill-current w-6 h-6 mr-2" src="/imgs/feather.webp"><span>{{ __('Editar') }}</span></x-button>
                                        <x-button wire:click="$emit('destroy', {{$guia->id}})"><img class="fill-current w-6 h-6 mr-2" src="/imgs/trash.webp"><span>{{ __('Borrar') }}</span></x-button>
                                        </div>
                                        @endif
                                        @endauth
                                        @endif
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
