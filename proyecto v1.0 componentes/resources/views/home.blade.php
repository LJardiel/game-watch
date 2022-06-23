<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
                    <div class="container xl:max-w-6xl mx-auto px-4">
                        <!-- row -->
                        <div class="flex flex-wrap flex-row -mx-4 text-center">
                            @foreach($juego as $juego)
                            <div class="flex-shrink basis-1/4 px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                                <!-- service block -->
                                <div class="mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                                    <img class="object-cover" src="{{$juego->boxart}}">
                                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{$juego->titulo}}</h3>
                                    <p class="text-gray-500">Logros: {{$juego->logros->count()}}</p>
                                </div>
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
</x-app-layout>