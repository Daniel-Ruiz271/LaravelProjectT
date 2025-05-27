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
                Gestión de Brackets
            </h2>
            <p class="mt-2 text-sm text-purple-200">Selecciona un torneo para ver o editar su bracket</p>
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

           
        </div>
    </div>
</div>

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8"> 
        <!-- Card Container -->
        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden border border-gray-700 border-opacity-50">
            <!-- Card Header -->
            <div class="px-6 py-5 border-b border-gray-700">
                <h3 class="text-lg font-medium text-blue-300">Torneos Disponibles</h3>
                <p class="mt-1 text-sm text-purple-200">Selecciona un torneo para gestionar su bracket</p>
            </div>

            <!-- Tournaments List -->
            <div class="px-6 py-5">
                @if($tournaments->isEmpty())
                <div class="text-center py-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-purple-400 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h4 class="mt-4 text-lg font-medium text-white">No hay torneos disponibles</h4>
                    <p class="mt-2 text-sm text-purple-200">Crea un nuevo torneo para comenzar</p>
                    <a href="{{ route('tournaments.create') }}" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-500 transition duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Crear Torneo
                    </a>
                </div>
                @else
                <div class="space-y-4">
                    @foreach ($tournaments as $tournament)
                    <div class="group relative">
                        <a href="{{ route('admin.brackets.show', $tournament->id) }}" class="block p-4 bg-gray-700 bg-opacity-50 rounded-lg hover:bg-gray-600 hover:bg-opacity-70 transition duration-150">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-900 bg-opacity-50 flex items-center justify-center border border-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-medium text-white group-hover:text-blue-300 transition duration-150">{{ $tournament->name }}</h4>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs text-purple-200">{{ $tournament->game->name ?? 'Sin juego asignado' }}</span>
                                            <span class="mx-2 text-gray-400">•</span>
                                            <span class="text-xs text-gray-400">
                                                {{ \Carbon\Carbon::parse($tournament->start_date)->format('d M Y') }}
                                                @if($tournament->end_date)
                                                - {{ \Carbon\Carbon::parse($tournament->end_date)->format('d M Y') }}
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-blue-300 transition duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Pagination -->
            @if($tournaments->hasPages())
            <div class="px-6 py-4 border-t border-gray-700">
                {{ $tournaments->links('vendor.pagination.custom') }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection