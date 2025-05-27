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
                Gestión de Torneos
            </h2>
            <p class="mt-2 text-sm text-purple-200">Organiza y gestiona tus competencias</p>
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
            <a href="{{ route('tournaments.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg shadow-sm text-sm font-medium text-white transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Nuevo Torneo
            </a>
           
        </div>
    </div>
</div>



@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Card Container -->
        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden border border-gray-700 border-opacity-50">
            <!-- Card Header -->
            <div class="px-6 py-5 border-b border-gray-700">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                    <div>
                        <h3 class="text-lg font-medium text-blue-300">Todos los Torneos</h3>
                        <p class="mt-1 text-sm text-purple-200">Lista completa de competencias activas</p>
                    </div>
                    <div class="mt-3 sm:mt-0">
                        <input type="text" placeholder="Buscar torneos..." class="px-4 py-2 bg-gray-700 bg-opacity-50 border border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white placeholder-gray-400 transition duration-150 w-full sm:w-64">
                    </div>
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead class="bg-gray-700 bg-opacity-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-300 uppercase tracking-wider">Torneo</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-300 uppercase tracking-wider">Juego</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-300 uppercase tracking-wider">Fechas</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-300 uppercase tracking-wider">Estado</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-blue-300 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 bg-opacity-50 divide-y divide-gray-700">
                        @forelse($tournaments as $tournament)
                        <tr class="hover:bg-gray-700 hover:bg-opacity-30 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-900 bg-opacity-50 flex items-center justify-center border border-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-white">{{ $tournament->name }}</div>
                                        <div class="text-xs text-purple-200">{{ $tournament->game->name ?? 'Sin juego' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-white">{{ $tournament->game->name ?? 'N/A' }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-white">
                                    {{ \Carbon\Carbon::parse($tournament->start_date)->format('d M Y') }}
                                    @if($tournament->end_date)
                                        - {{ \Carbon\Carbon::parse($tournament->end_date)->format('d M Y') }}
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $status = $tournament->status ?? 'pending';
                                    $statusColors = [
                                        'pending' => 'bg-yellow-900 text-yellow-300',
                                        'active' => 'bg-green-900 text-green-300',
                                        'completed' => 'bg-blue-900 text-blue-300',
                                        'canceled' => 'bg-red-900 text-red-300'
                                    ];
                                @endphp
                                <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $statusColors[$status] ?? 'bg-gray-900 text-gray-300' }}">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2">
                                    <a href="{{ route('tournaments.edit', $tournament) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-gray-900 bg-yellow-400 hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Editar
                                    </a>
                                    <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este torneo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150">
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
                                <p class="mt-2 text-sm font-medium">No hay torneos registrados</p>
                                <a href="{{ route('tournaments.create') }}" class="mt-2 inline-flex items-center px-3 py-1 text-xs font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-500 transition duration-150">
                                    Crear primer torneo
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
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