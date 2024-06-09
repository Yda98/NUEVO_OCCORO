<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight py-0">
            {{ __('Crear documentos') }}
        </h2>
    </x-slot>

    <div class="py-4 lg:py-4">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg yda">
                <div class="p-4 sm:p-6 lg:p-8 text-gray-900">
                    <a href="{{ route('documentos.index') }}">Volver</a>

                    <form action="{{ route('documentos.store') }}" method="POST"
                        class="max-w-md mx-auto bg-blue-100 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" id="name" name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-6">
                            <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Edad:</label>
                            <input type="number" id="age" name="age"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Agregar
                                Documento</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    .yda {
        background-color: rgb(12, 235, 45);
        border-radius: 10px;
    }
</style>
