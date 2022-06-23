<div>
    {{-- In work, do what you enjoy. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de usuario
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-rojo shadow-xl sm:rounded-lg p-6">
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- card amarilla -->
                    <div class="drop-shadow-lg bg-yellow-300 px-10 py-8 md:flex gap-4 w-full md:w-1/2">
                        <div class="w-36 h-36 rounded-full bg-white relative mx-auto">
                            <x-button wire:click="abrirModal" class="absolute bottom-0 right-0">Editar</x-button>
                            <img src="{{$urlfoto}}" alt="foto de perfil" class="object-cover rounded-full w-36 h-36">
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold mb-3 text-center md:text-left">Hola: {{$perfil->name}}</h3>
                            <ul class="grid grid-cols-4 gap-2 place-items-end">
                                @if($editarEmail)
                                <li class="col-span-3">
                                    <input type="text" wire:model="email" wire:blur="guardarEmail">
                                    @error('email')<br> <span class="error">{{ $message }}</span> @enderror
                                </li>
                                @else
                                <li class="col-span-3">{{$perfil->email}}</li>
                                @endif
                                <li>
                                    <x-button wire:click="editarEmail" />
                                </li>
                                @if($editarName)
                                <li class="col-span-3">
                                    <input type="text" wire:model="name" wire:blur="guardarName">
                                    @error('name')<br> <span class="error">{{ $message }}</span> @enderror
                                </li>
                                @else
                                <li class="col-span-3">{{$perfil->name}}</li>
                                @endif
                                <li>
                                    <x-button wire:click="editarName" />
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- form -->
                    @if($open)
                    <div class="transition-opacity ease-in-out delay-150 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="modal-id">
                        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
                        <div class="w-full  max-w-lg px-12 py-10 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
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
        </div>
    </div>
</div>
</div>
