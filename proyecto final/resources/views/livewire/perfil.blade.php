<div>
    {{-- In work, do what you enjoy. --}}
    <!--        
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de usuario
        </h2>
    </x-slot>
    -->
    <div class="py-12">
        <div class="bg-rojo shadow-xl max-w-3xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-blanco text-3xl font-bold mb-10 p-4 text-center">Mi Perfil</h2>
            <div class="p-6 flex flex-wrap items-center  justify-center">
                <div class="flex justify-center px-5  relative -mt-12">
                    <x-button wire:click="abrirModal" class="absolute bottom-0 right-0"><img class="fill-current w-6 h-6" src="/imgs/book_and_quill.webp"></x-button>
                    <img class="h-32 w-32 bg-white p-2 rounded-full   " src="{{$urlfoto}}" alt="" />
                </div>
                <div class="">
                    <div class="text-center px-14">
                        @if($editarName)
                            <x-input type="text" wire:model="name" wire:blur="guardarName"/>
                            @error('name')<br> <span class="error">{{ $message }}</span> @enderror
                        @else
                            <h2 class="text-blanco text-2xl font-bold">{{$perfil->name}}</h2>
                            <x-button wire:click="editarName"><img class="fill-current w-6 h-6" src="/imgs/book_and_quill.webp"></x-button>
                        @endif
                        @if($editarEmail)
                            <x-input type="text" wire:model="email" wire:blur="guardarEmail"/>
                            @error('email')<br> <span class="error">{{ $message }}</span> @enderror
                        @else
                            <h2 class="text-blanco text-2xl font-bold">{{$perfil->email}}</h2>
                            <x-button wire:click="editarEmail"><img class="fill-current w-6 h-6" src="/imgs/book_and_quill.webp"></x-button>
                            @endif
                    </div>
                </div>
                <h2 class="text-blanco text-2xl font-bold mt-10">Mis guías</h2>
                @foreach($usuario->guias->sortByDesc('updated_at') as $guia)
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
                                        <div class="p-2 flex items-center justify-end">
                                            <!-- Solo funciona el de borrar -->
                                        <x-button class="mr-2" wire:click=""><img class="fill-current w-6 h-6 mr-2" src="/imgs/feather.webp"><span>{{ __('Editar') }}</span></x-button>
                                        <x-button wire:click="$emit('destroy', {{$guia->id}})"><img class="fill-current w-6 h-6 mr-2" src="/imgs/trash.webp"><span>{{ __('Borrar') }}</span></x-button>
                                        </div>
                @endforeach
            </div>
        </div>
    </div>
                        <!-- form -->
                        @if($open)
                    <div class="transition-opacity ease-in-out delay-150 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="modal-id">
                        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
                        <div class="w-full  max-w-lg px-12 py-10 relative mx-auto my-auto rounded-xl shadow-lg  bg-rojo ">
                            <!--content-->
                            <h3 class="text-2xl mb-3">Selecciona tu foto de perfil</h3>
                            <form wire:submit.prevent="save">
                                <div>
                                    <!--body-->

                                    <div class="flex items-center space-x-6">
                                        <div class="shrink-0">
                                            @if ($photo)
                                            <img src="{{ $photo->temporaryUrl() }}" class="h-16 w-16 object-cover rounded-full">
                                            @else
                                            <img class="h-16 w-16 object-cover rounded-full" src="{{$urlfoto}}" alt="foto por defecto" />
                                            @endif
                                            
                                        </div>
                                        <label class="block">
                                            <span class="sr-only">Choose profile photo</span>
                                            <input type="file" wire:model="photo" class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-yellow-300 file:text-yellow-700
                                        hover:file:bg-yellow-100
                                        " />
                                        </label>

                                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <!--footer-->
                                    <div class="flex gap-4  mt-5 justify-end">
                                        <x-button wire:click="cerrarModal">Cancelar</x-button-livcancelar>
                                        <x-button>Listo</x-button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
</div>
