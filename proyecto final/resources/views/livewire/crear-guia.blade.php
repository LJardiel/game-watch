<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @if (Route::has('login'))
    @auth
    <x-button wire:click="abrirModal"><img class="fill-current w-6 h-6 mr-2" src="/imgs/book_and_quill.webp"><span>{{ __('Escribe') }}</span></x-button>
    @else
    <x-button disabled wire:click="abrirModal"><img class="fill-current w-6 h-6 mr-2" src="/imgs/book_and_quill.webp"><span>{{ __('Escribe') }}</span></x-button>
    @endauth
    @endif

    @if($open)
    <!-- component -->
    <div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="modal-id">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
        <div class="w-full  max-w-lg p-5 relative mx-auto my-auto shadow-lg">
            <!--content-->
            <div class="">
            <x-auth-card-modal>
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </x-slot>

                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                Selecionado: {{$logro->titulo}}
                <form wire:submit.prevent="submit">
                    <!-- Titulo -->
                    <div>
                        <x-label for="titulo" :value="__('Título para la guía')" />
                        <x-input id="titulo" wire:model="titulo" class="block mt-1 w-full" type="text" name="titulo" required autofocus/>
                        @error('titulo') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <!-- Descripción -->
                    <div>
                        <x-label for="instrucciones" :value="__('Escribe tu guía')" />
                        <textarea id="instrucciones" wire:model="instrucciones" class="block mt-1 w-full bg-blanco shadow-xl border-negro border-4 border-t-negrito border-b-black focus:border-gray-500 focus:border-t-white focus:ring-0" type="text" rows="10" name="instrucciones" required autofocus></textarea>
                        @error('instrucciones') <span class="error">{{ $message }}</span> @enderror
                    </div> 

                    <div class="flex items-center justify-end mt-4">
                        <x-button wire:click="cerrarModal">
                            Cancelar
                        </x-button>
                        <x-button class="ml-3">
                            {{ __('Terminar guía') }}
                        </x-button>
                    </div>
                </form>
            </x-auth-card-modal>
        </div>
    </div>
    @endif
</div>
