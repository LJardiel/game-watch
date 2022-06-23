<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <form action="{{route('guias.store')}}" method="POST">
            @csrf
            
            <!-- Titulo -->
            <div>
                <x-label for="titulo" :value="__('Título para la guía')" />

                <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus />
            </div>

            <!-- Descripción -->
            <div>
                <x-label for="instrucciones" :value="__('Escribe tu guía')" />

                <textarea id="instrucciones" class="block mt-1 w-full rounded-md bg-blanco shadow-sm border-negrito focus:border-rojo focus:ring focus:ring-negrito focus:ring-opacity-50" type="text" rows="10" name="instrucciones" :value="old('instrucciones')" required autofocus></textarea>
            </div>
            <input type="hidden" name="idLogro" value='{{$idLogro}}'>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Terminar guía') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>