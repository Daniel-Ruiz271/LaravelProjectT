@extends('layouts.app')


<!-- Barra de navegación mejorada con efectos y animaciones -->
<div class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 shadow-lg relative overflow-hidden">
    <!-- Efecto de partículas animadas -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-1/4 w-8 h-8 rounded-full bg-white/10 animate-float-1"></div>
        <div class="absolute top-20 right-1/3 w-6 h-6 rounded-full bg-white/15 animate-float-2"></div>
        <div class="absolute bottom-10 left-1/3 w-10 h-10 rounded-full bg-white/20 animate-float-3"></div>
        <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-white/5 animate-float-4"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
           <h2 class="text-3xl font-bold text-yellow-400 tracking-tight">
                
                Editar Juego
            </h2>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo y menú principal -->
            <div class="flex items-center space-x-2">
                <!-- Logo con animación -->
                <a href="{{ route('dashboard') }}" class="flex items-center text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-500/30 transition-all duration-300 group">
                    <div class="p-2 rounded-lg bg-indigo-500/30 group-hover:bg-indigo-500/50 transition-all duration-300 transform group-hover:rotate-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    </div>
                    <span class="group-hover:text-yellow-200 transition-colors duration-300"> Dashboard</span>
                </a>
                
                <!-- Menú de navegación -->
                <nav class="hidden md:flex md:space-x-1 ml-4">
                    <a href="{{ route('players.index') }}" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-indigo-500/30 hover:text-yellow-200 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-pink-300 group-hover:animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Jugadores
                    </a>
                    <a href="{{ route('tournaments.index') }}" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-indigo-500/30 hover:text-yellow-200 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-green-300 group-hover:animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Torneos
                    </a>
                </nav>
            </div>
            <a href="{{ route('games.index') }}" class="flex items-center text-white hover:text-yellow-200 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                </svg>
                Volver a la lista
            </a>
           
        </div>
    </div>
</div>


@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Tarjeta con efecto vidrio y sombra -->
        <div class="bg-white bg-opacity-90 backdrop-blur-sm rounded-xl shadow-xl overflow-hidden border border-gray-200 border-opacity-60 transform transition-all hover:shadow-2xl hover:-translate-y-1">
            <!-- Cabecera con gradiente -->
            <div class="px-6 py-4 bg-gradient-to-r from-blue-500 to-blue-600">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-white">Editar "{{ $game->name }}"</h3>
                    <div class="bg-white/20 p-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Formulario -->
            <div class="px-6 py-5">
                <form action="{{ route('games.update', $game) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Campo Nombre -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Nombre del Juego
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name', $game->name) }}" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 hover:border-blue-400 placeholder-gray-400"
                            placeholder="Ej: League of Legends">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Campo Descripción -->
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            Descripción (Opcional)
                        </label>
                        <textarea id="description" name="description" rows="3"
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 hover:border-blue-400 placeholder-gray-400"
                            placeholder="Breve descripción del juego...">{{ old('description', $game->description ?? '') }}</textarea>
                    </div>

                    <!-- Campo Género -->
                    <div class="mb-6">
                        <label for="genre" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            Género
                        </label>
                        <select id="genre" name="genre"
                            class="mt-1 block w-full pl-3 pr-10 py-3 text-base border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 hover:border-blue-400 appearance-none">
                            <option value="MOBA" {{ old('genre', $game->genre) == 'MOBA' ? 'selected' : '' }}>MOBA</option>
                            <option value="FPS" {{ old('genre', $game->genre) == 'FPS' ? 'selected' : '' }}>FPS</option>
                            <option value="RPG" {{ old('genre', $game->genre) == 'RPG' ? 'selected' : '' }}>RPG</option>
                            <option value="Estrategia" {{ old('genre', $game->genre) == 'Estrategia' ? 'selected' : '' }}>Estrategia</option>
                            <option value="Deportes" {{ old('genre', $game->genre) == 'Deportes' ? 'selected' : '' }}>Deportes</option>
                            <option value="Lucha" {{ old('genre', $game->genre) == 'Lucha' ? 'selected' : '' }}>Lucha</option>
                        </select>
                    </div>

                    <!-- Campo Plataforma -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                            Plataforma(s)
                        </label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="platforms[]" value="PC" {{ in_array('PC', old('platforms', $game->platforms ?? [])) ? 'checked' : '' }} class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span class="ml-2 text-gray-700">PC</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="platforms[]" value="PlayStation" {{ in_array('PlayStation', old('platforms', $game->platforms ?? [])) ? 'checked' : '' }} class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span class="ml-2 text-gray-700">PlayStation</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="platforms[]" value="Xbox" {{ in_array('Xbox', old('platforms', $game->platforms ?? [])) ? 'checked' : '' }} class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span class="ml-2 text-gray-700">Xbox</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="platforms[]" value="Nintendo" {{ in_array('Nintendo', old('platforms', $game->platforms ?? [])) ? 'checked' : '' }} class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <span class="ml-2 text-gray-700">Nintendo</span>
                            </label>
                        </div>
                    </div>

                    <!-- Acciones del Formulario -->
                    <div class="flex flex-col sm:flex-row justify-end pt-4 border-t border-gray-200 space-y-3 sm:space-y-0 sm:space-x-3">
                        <a href="{{ route('games.index') }}" class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Actualizar Juego
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


