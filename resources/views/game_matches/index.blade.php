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
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-amber-500 tracking-tight">
                Dashboard de Partidos
            </h2>
            <p class="mt-2 text-sm text-purple-200 opacity-90">Visualización de enfrentamientos y estadísticas</p>
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
            <div class="flex space-x-3">
            <a href="{{ route('matches.create') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-lg shadow-lg text-sm font-medium text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Nuevo Partido
            </a>
            <button id="toggle-view" class="inline-flex items-center px-4 py-2 border border-gray-600 rounded-lg shadow-sm text-sm font-medium text-white bg-gray-700 hover:bg-gray-600 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 transform hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                Cambiar Vista
            </button>
            <a href="{{ route('admin.brackets.index') }}" class="px-4 py-2 rounded-lg shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-500 transition duration-150">
                Volver a Brackets
            </a>
        </div>
           
        </div>
    </div>
</div>



@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        <!-- Estadísticas simplificadas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Total de partidos -->
            <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl p-6 border border-gray-700 border-opacity-50 shadow-[inset_0_2px_4px_0_rgba(0,0,0,0.6)] hover:shadow-[inset_0_2px_8px_0_rgba(0,0,0,0.8)] transition-all duration-300 hover:border-purple-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-purple-200">Total Partidos</p>
                        <p class="mt-1 text-3xl font-semibold text-white">{{ $matches->total() }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-gradient-to-br from-blue-900 to-blue-800 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Top 5 jugadores (gráfico) -->
            <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl p-6 border border-gray-700 border-opacity-50 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Top 5 Jugadores</h3>
                    <div class="p-2 rounded-full bg-gray-700 bg-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <canvas id="topPlayersChart" class="w-full h-48"></canvas>
            </div>
        </div>

        <!-- Vista de Tabla (por defecto) -->
        <div id="table-view" class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden border border-gray-700 border-opacity-50 transform transition-all duration-300 hover:shadow-purple-500/10">
            <!-- Card Header con gradiente -->
            <div class="px-6 py-5 bg-gradient-to-r from-gray-800 to-gray-900 border-b border-gray-700">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                    <div>
                        <h3 class="text-lg font-medium text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Listado de Partidos</h3>
                        <p class="mt-1 text-sm text-purple-200 opacity-90">Detalles de todos los enfrentamientos registrados</p>
                    </div>
                    <div class="mt-3 sm:mt-0">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="search-matches" placeholder="Buscar partidos..." class="block w-full pl-10 pr-3 py-2 bg-gray-700 bg-opacity-50 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition duration-150 sm:w-64">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead class="bg-gray-700 bg-opacity-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300 uppercase tracking-wider">Torneo</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300 uppercase tracking-wider">Jugadores</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300 uppercase tracking-wider">Ganador</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 bg-opacity-50 divide-y divide-gray-700" id="matches-table-body">
                        @forelse($matches as $match)
                        <tr class="hover:bg-gray-700 hover:bg-opacity-30 transition duration-150 group">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gradient-to-br from-purple-900 to-blue-900 flex items-center justify-center border border-purple-500 shadow-lg group-hover:shadow-purple-500/50 transition duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-white group-hover:text-blue-300 transition duration-150">{{ $match->tournament->name }}</div>
                                        <div class="text-xs text-purple-200 opacity-80">{{ $match->tournament->game->name ?? 'Sin juego' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col space-y-2">
                                    <div class="flex items-center">
                                        <span class="inline-block h-3 w-3 rounded-full bg-gradient-to-r from-blue-400 to-cyan-400 mr-2 shadow-md"></span>
                                        <span class="text-sm text-white">{{ $match->player1->name }}</span>
                                        @if($match->player1->main_character)
                                        <span class="ml-2 text-xs text-gray-400 opacity-80">({{ $match->player1->main_character }})</span>
                                        @endif
                                    </div>
                                    <div class="flex items-center">
                                        <span class="inline-block h-3 w-3 rounded-full bg-gradient-to-r from-red-400 to-pink-400 mr-2 shadow-md"></span>
                                        <span class="text-sm text-white">{{ $match->player2->name }}</span>
                                        @if($match->player2->main_character)
                                        <span class="ml-2 text-xs text-gray-400 opacity-80">({{ $match->player2->main_character }})</span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($match->winner_id)
                                <div class="flex items-center">
                                    <span class="inline-block h-3 w-3 rounded-full bg-gradient-to-r from-green-400 to-emerald-400 mr-2 shadow-md"></span>
                                    <span class="text-sm font-semibold text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-emerald-300">{{ $match->winner->name }}</span>
                                </div>
                                @else
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-700 text-gray-300">No definido</span>
                                @endif
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2">
                                    <a href="{{ route('matches.edit', $match) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-gray-900 bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all duration-300 transform hover:scale-105">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Editar
                                    </a>
                                    <form action="{{ route('matches.destroy', $match) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este partido?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-300 transform hover:scale-105">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-purple-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-purple-400 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="mt-2 text-sm font-medium">No hay partidos registrados</p>
                                <a href="{{ route('matches.create') }}" class="mt-2 inline-flex items-center px-3 py-1 text-xs font-medium rounded-lg text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105">
                                    Crear primer partido
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($matches->hasPages())
            <div class="px-6 py-4 border-t border-gray-700">
                {{ $matches->links('vendor.pagination.custom') }}
            </div>
            @endif
        </div>

        <!-- Vista de Tarjetas (oculta por defecto) -->
        <div id="card-view" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($matches as $match)
            <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-lg overflow-hidden border border-gray-700 border-opacity-50 hover:border-blue-400 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl group">
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-medium text-white group-hover:text-blue-300 transition duration-150">{{ $match->tournament->name }}</h3>
                            <p class="text-sm text-purple-200 opacity-90">{{ $match->tournament->game->name ?? 'Sin juego' }}</p>
                        </div>
                        
                    </div>

                    <div class="mt-4 space-y-3">
                        <div class="flex items-center justify-between bg-gray-700 bg-opacity-50 px-3 py-2 rounded-lg border border-gray-600 group-hover:border-blue-400 transition duration-150">
                            <div class="flex items-center">
                                <span class="inline-block h-3 w-3 rounded-full bg-gradient-to-r from-blue-400 to-cyan-400 mr-2 shadow-md"></span>
                                <span class="text-sm text-white">{{ $match->player1->name }}</span>
                            </div>
                            @if($match->winner_id === $match->player1_id)
                            <span class="text-xs font-semibold text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-emerald-300">GANADOR</span>
                            @endif
                        </div>

                        <div class="flex items-center justify-between bg-gray-700 bg-opacity-50 px-3 py-2 rounded-lg border border-gray-600 group-hover:border-red-400 transition duration-150">
                            <div class="flex items-center">
                                <span class="inline-block h-3 w-3 rounded-full bg-gradient-to-r from-red-400 to-pink-400 mr-2 shadow-md"></span>
                                <span class="text-sm text-white">{{ $match->player2->name }}</span>
                            </div>
                            @if($match->winner_id === $match->player2_id)
                            <span class="text-xs font-semibold text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-emerald-300">GANADOR</span>
                            @endif
                        </div>

                        @if($match->winner_id)
                        <div class="mt-3 text-center">
                            <p class="text-xs text-gray-400 opacity-80">Resultado final</p>
                            <p class="text-sm font-semibold text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-emerald-300">{{ $match->winner->name }} ganó</p>
                        </div>
                        @endif
                    </div>

                    <div class="mt-4 pt-4 border-t border-gray-700 flex justify-end space-x-2">
                        <a href="{{ route('matches.edit', $match) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-gray-900 bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-all duration-300 transform hover:scale-105">
                            Editar
                        </a>
                        <form action="{{ route('matches.destroy', $match) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este partido?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-red-600 to-pink-600 hover:from-red-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-300 transform hover:scale-105">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-purple-400 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h4 class="mt-4 text-lg font-medium text-white">No hay partidos registrados</h4>
                <p class="mt-2 text-sm text-purple-200 opacity-90">Crea un nuevo partido para comenzar</p>
                <a href="{{ route('matches.create') }}" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105">
                    Crear primer partido
                </a>
            </div>
            @endforelse
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gráfico de top jugadores
        const playersCtx = document.getElementById('topPlayersChart');
        if (playersCtx) {
            const topPlayers = {!! json_encode($topPlayers) !!};
            const hasData = topPlayers.some(player => player.wins_count > 0);
            
            if (hasData) {
                new Chart(playersCtx, {
                    type: 'bar',
                    data: {
                        labels: topPlayers.map(player => player.name),
                        datasets: [{
                            label: 'Victorias',
                            data: topPlayers.map(player => player.wins_count),
                            backgroundColor: 'rgba(56, 182, 255, 0.8)',
                            borderColor: 'rgba(6, 182, 212, 1)',
                            borderWidth: 1,
                            borderRadius: 6,
                            hoverBackgroundColor: 'rgba(94, 234, 212, 0.8)'
                        }]
                    },
                    options: {
                        responsive: true,
                        indexAxis: 'y',
                        scales: {
                            x: {
                                beginAtZero: true,
                                ticks: { color: '#e2e8f0' },
                                grid: { color: 'rgba(74, 85, 104, 0.3)' }
                            },
                            y: {
                                ticks: { color: '#e2e8f0' },
                                grid: { display: false }
                            }
                        },
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                backgroundColor: 'rgba(30, 41, 59, 0.9)',
                                titleColor: '#e2e8f0',
                                bodyColor: '#e2e8f0',
                                borderColor: 'rgba(74, 85, 104, 0.5)',
                                borderWidth: 1,
                                padding: 12,
                                cornerRadius: 8
                            }
                        }
                    }
                });
            } else {
                playersCtx.innerHTML = '<div class="flex items-center justify-center h-full"><p class="text-center text-gray-400 py-8">No hay datos de jugadores</p></div>';
            }
        }
        
        // Toggle entre vista de tabla y tarjetas
        const toggleViewBtn = document.getElementById('toggle-view');
        const tableView = document.getElementById('table-view');
        const cardView = document.getElementById('card-view');
        
        if (toggleViewBtn && tableView && cardView) {
            toggleViewBtn.addEventListener('click', function() {
                tableView.classList.toggle('hidden');
                cardView.classList.toggle('hidden');
                
                // Cambiar el icono del botón
                const icon = this.querySelector('svg');
                if (tableView.classList.contains('hidden')) {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                    this.querySelector('span').textContent = 'Vista de Tabla';
                } else {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />';
                    this.querySelector('span').textContent = 'Vista de Tarjetas';
                }
            });
        }
        
        // Búsqueda en tiempo real
        const searchInput = document.getElementById('search-matches');
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('#matches-table-body tr');
                
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        row.classList.remove('hidden');
                    } else {
                        row.classList.add('hidden');
                    }
                });
            });
        }
    });
</script>
@endpush
@endsection