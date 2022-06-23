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
            <div class="bg-rojo shadow-xl sm:rounded-lg">
                <!-- Inicia -->
                <div class="container mx-auto my-5 p-5">
                    <div class="md:flex no-wrap md:-mx-2 ">
                        <!-- Izquierda -->
                        <div class="w-full md:w-3/12 md:mx-2">
                            <!-- Card Juego -->
                            <div class="bg-negro rounded p-3">
                            <div class="image overflow-hidden">
                                            <img class="h-auto w-full mx-auto"
                                                src="/logro/3.webp"
                                                alt="">
                                        </div>
                                <h1 class="text-blanco font-bold text-xl leading-8 my-1">{{$logro->titulo}}</h1>
                                <h3 class="text-blanco font-lg text-semibold leading-6">{{$logro->juego->titulo}}</h3>
                                        <p class="text-sm text-negrito leading-6">{{$logro->descripcion}}</p>
                                        <ul
                                            class="bg-negrito text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                            <li class="flex items-center py-3 pl-5">
                                                <span><img class="rounded h-8 w-8" src="/imgs/book.webp"></span>
                                                <span class="ml-auto pr-5">
                                                    <span class="py-1 px-2 rounded text-blanco text-sm">Cantidad de guías: {{$logro->guias->count()}}</span>
                                                </span>
                                            </li>
                                        </ul>
                                        <a class="text-blanco text-center px-5 text-xl" href="{{route('guias.create2',$logro->id)}}"><h3>Escribir una guía</h3></a>
                            </div>
                            <!-- End of profile card -->
                            
                        </div>
                        <!-- Right Side -->
                        <div class="w-full md:w-9/12 mx-2 h-auto">
                            <!-- Profile tab -->
                            <!-- About Section -->
                            <div class="bg-negro p-3 shadow-sm mb-2 pb-2 rounded-sm">
                                <div class="flex items-center space-x-2 px-10 font-bold text-xl text-blanco leading-8">
                                    <span class="tracking-wide">Guías escritas</span>
                                </div>
                                @foreach($logro->guias->sortBy('titulo') as $guia)
                                <div class="text-blanco transition group hover:translate-x-2 shadow-xl">
                                    <a href="{{route('logros.show',$logro->id)}}">
                                    <div class="flex items-center w-full justify-start overflow-auto bg-negrito rounded my-2">
                                        <div class="flex items-center justify-between h-24 text-blanco rounded-lg">
                                            <div class="flex flex-col px-4">
                                                <p class="text-md font-semibold">{{$guia->titulo}}</p>
                                                <span class="text-xs">Escribió: {{$guia->user->name}}</span>
                                                <span class="text-xs">{{$guia->instrucciones}}</span>
                                            </div>


                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->id==$guia->user_id)
                                <div class="flex items-center justify-end">
                                <a class="text-blanco px-5" href="{{route('guias.edit',$guia->id)}}">Editar guía</a>
                                            <form action="{{route('guias.destroy',$guia->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-blanco px-5">Eliminar guía</button>
                                            </form>
                                </div>
                                @else
                                @endif
                                @else
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
</x-app-layout>