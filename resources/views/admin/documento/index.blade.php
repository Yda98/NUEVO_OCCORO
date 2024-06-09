<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight py-0">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    <div class="py-4 lg:py-4">
        <div class="max-w-12xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg yda">
                <div class="p-4 sm:p-6 lg:p-8 text-gray-900">
                    <a href="{{ route('documentos.create') }}">CREATE</a>
                    <h1 class="text-3xl font-semibold mb-4">Listado de Documentos</h1>

                    <table class="min-w-full rounded-lg overflow-hidden divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID1</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Edad</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($documentos as $documento)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $documento->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $documento->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $documento->age }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('documentos.edit', $documento->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                        <form id="delete-form-{{ $documento->id }}"
                                            action="{{ route('documentos.destroy', $documento->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete('{{ $documento->id }}')"
                                                class="text-red-600 hover:text-red-900 bg-red-100 hover:bg-red-200 px-2 py-1 rounded-md">Eliminar</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

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
<script>
    function confirmDelete(documentoId) {
        if (confirm('¿Estás seguro de que deseas eliminar este documento?')) {
            document.getElementById('delete-form-' + documentoId).submit();
        }
    }
</script>
