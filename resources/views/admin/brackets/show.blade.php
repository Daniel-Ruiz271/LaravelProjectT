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
                Bracket del Torneo: {{ $tournament->name }}
            </h2>
            <p class="mt-2 text-sm text-purple-200">
                Gestión de enfrentamientos para el torneo "{{ $tournament->name }}"
            </p>
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

            <div class="flex gap-2">
            <!-- Botón para crear un nuevo enfrentamiento -->
            <a href="{{ route('matches.index') }}" class="px-4 py-2 rounded-lg shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-500 transition duration-150">
                Panel de partidas
            </a>
        </div>
        </div>
    </div>
</div>


@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 py-12">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-800 bg-opacity-70 rounded-xl shadow-2xl border border-gray-700">
            <div class="px-6 py-5 border-b border-gray-700 flex justify-between items-center">
                <h3 class="text-lg font-semibold text-blue-300">Enfrentamientos del Bracket</h3>
                @if($tournament->matches->count())
                <a href="{{ route('matches.create') }}" class="text-green-400 hover:underline text-sm">
                    + Crear nuevo enfrentamiento
                </a>
                @endif
            </div>

            <div class="px-6 py-6 space-y-4">
                @forelse($tournament->matches as $match)
                    <div class="bg-gray-700 bg-opacity-50 p-4 rounded-lg shadow-md flex justify-between items-center">
                        <div>
                            <p class="text-white font-semibold">{{ $match->player1->name }} vs {{ $match->player2->name }}</p>
                            <p class="text-sm text-gray-300">Ronda: {{ $match->round }}</p>
                            <p class="text-sm text-gray-400">Ganador: 
                                @if($match->winner_id)
                                    <span class="text-green-400">{{ $match->winner->name }}</span>
                                @else
                                    <span class="text-yellow-300 italic">Pendiente</span>
                                @endif
                            </p>
                        </div>
                        <div class="flex gap-2">
                            <form action="{{ route('matches.update', $match->id) }}" method="POST" class="flex items-center gap-2">
                                @csrf
                                @method('PUT')
                                <select name="winner_id" class="rounded-md px-2 py-1 text-sm text-black">
                                    <option value="">-- Ganador --</option>
                                    <option value="{{ $match->player1_id }}">{{ $match->player1->name }}</option>
                                    <option value="{{ $match->player2_id }}">{{ $match->player2->name }}</option>
                                </select>
                                <button type="submit" class="ml-2 px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-500">
                                    Actualizar
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-white py-10">
                        <p class="text-xl">Este torneo aún no tiene enfrentamientos registrados.</p>
                        <a href="{{ route('matches.create') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-500">
                            Crear Enfrentamientos
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
