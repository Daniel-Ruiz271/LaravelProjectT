@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-2xl font-semibold mb-4">Editar Jugador</h2>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('players.update', $player) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium" for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name', $player->name) }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium" for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $player->email) }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium" for="main_character">Personaje Principal</label>
            <input type="text" name="main_character" id="main_character" value="{{ old('main_character', $player->main_character) }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-medium" for="user_id">Asignar a Usuario</label>
            <select name="user_id" id="user_id"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @selected($user->id == $player->user_id)>
                        {{ $user->name }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Actualizar</button>
    </form>
</div>
@endsection
