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
                Editar Partido
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

             <a href="{{ route('matches.index') }}" class="flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-600 transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Volver
        </a>
        </div>
    </div>
</div>


@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-6 bg-green-900 bg-opacity-50 border border-green-700 text-green-200 px-4 py-3 rounded-lg">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <!-- Card Container -->
        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden border border-gray-700 border-opacity-50">
            <!-- Card Header -->
            <div class="px-6 py-5 border-b border-gray-700">
                <h3 class="text-lg font-medium text-blue-300">Información del Partido</h3>
                <p class="mt-1 text-sm text-purple-200">Actualiza los detalles del enfrentamiento</p>
            </div>

            <!-- Form Container -->
            <div class="px-6 py-5">
                <form action="{{ route('matches.update', $match) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Tournament Selection -->
                    <div class="mb-6">
                        <label for="tournament_id" class="block text-sm font-medium text-blue-300 mb-2">Torneo</label>
                        <div class="relative">
                            <select id="tournament_id" name="tournament_id" class="block w-full pl-3 pr-10 py-3 text-base bg-gray-700 bg-opacity-50 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white transition duration-150">
                                @foreach($tournaments as $tournament)
                                    <option value="{{ $tournament->id }}" {{ $tournament->id == $match->tournament_id ? 'selected' : '' }}>
                                        {{ $tournament->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('tournament_id')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Players Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Player 1 -->
                        <div>
                            <label for="player1_id" class="block text-sm font-medium text-blue-300 mb-2">Jugador 1</label>
                            <div class="relative">
                                <select id="player1_id" name="player1_id" class="block w-full pl-3 pr-10 py-3 text-base bg-gray-700 bg-opacity-50 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white transition duration-150">
                                    @foreach($players as $player)
                                        <option value="{{ $player->id }}" {{ $player->id == $match->player1_id ? 'selected' : '' }}>
                                            {{ $player->name }} ({{ $player->main_character ?? 'Sin personaje' }})
                                        </option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            @error('player1_id')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Player 2 -->
                        <div>
                            <label for="player2_id" class="block text-sm font-medium text-blue-300 mb-2">Jugador 2</label>
                            <div class="relative">
                                <select id="player2_id" name="player2_id" class="block w-full pl-3 pr-10 py-3 text-base bg-gray-700 bg-opacity-50 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white transition duration-150">
                                    @foreach($players as $player)
                                        <option value="{{ $player->id }}" {{ $player->id == $match->player2_id ? 'selected' : '' }}>
                                            {{ $player->name }} ({{ $player->main_character ?? 'Sin personaje' }})
                                        </option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                            @error('player2_id')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Winner Selection -->
                    <div class="mb-6">
                        <label for="winner_id" class="block text-sm font-medium text-blue-300 mb-2">Ganador (Opcional)</label>
                        <div class="relative">
                            <select id="winner_id" name="winner_id" class="block w-full pl-3 pr-10 py-3 text-base bg-gray-700 bg-opacity-50 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white transition duration-150">
                                <option value="">-- No definido --</option>
                                @foreach($players as $player)
                                    <option value="{{ $player->id }}" {{ $player->id == $match->winner_id ? 'selected' : '' }}>
                                        {{ $player->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        @error('winner_id')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end pt-4 border-t border-gray-700">
                        <button type="reset" class="mr-3 px-4 py-2 border border-gray-600 rounded-lg shadow-sm text-sm font-medium text-white bg-transparent hover:bg-gray-700 transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Limpiar
                        </button>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-500 transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Actualizar Partido
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection