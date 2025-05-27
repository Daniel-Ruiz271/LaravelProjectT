<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles del Jugador
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="mb-4">
                    <strong>Nombre del Jugador:</strong> {{ $player->name }}
                </div>
                <div class="mb-4">
                    <strong>Juego Principal:</strong> {{ $player->main_character }}
                </div>
                <div class="flex justify-start">
                    <a href="{{ route('players.edit', $player) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Editar</a>
                    <form action="{{ route('players.destroy', $player) }}" method="POST" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
