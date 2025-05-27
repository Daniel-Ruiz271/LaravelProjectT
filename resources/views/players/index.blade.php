@extends('layouts.app')

<!-- Barra de navegación personalizada - Estilo Creativo -->
<div class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 shadow-lg relative overflow-hidden">
    <!-- Efecto de burbujas decorativas -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 left-1/4 w-8 h-8 rounded-full bg-white/10 animate-float"></div>
        <div class="absolute top-20 right-1/3 w-6 h-6 rounded-full bg-white/15 animate-float2"></div>
        <div class="absolute bottom-10 left-1/3 w-10 h-10 rounded-full bg-white/20 animate-float3"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo/Inicio con estilo animado -->
                <a href="{{ route('dashboard') }}" class="flex items-center text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-500/30 transition-all duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="group-hover:text-yellow-200 transition-colors duration-300">Dashboard</span>
                </a>
                
                <!-- Menú de navegación con efecto neon -->
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-1">
                    <a href="{{ route('players.index') }}" class="text-white hover:bg-indigo-500/30 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:shadow-glow group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1 group-hover:text-pink-300 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="group-hover:text-yellow-200 transition-colors duration-300">Jugadores</span>
                    </a>
                    <a href="{{ route('tournaments.index') }}" class="text-white hover:bg-indigo-500/30 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:shadow-glow group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1 group-hover:text-green-300 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <span class="group-hover:text-yellow-200 transition-colors duration-300">Torneos</span>
                    </a>
                </div>
            </div>

            
        </div>
    </div>
</div>



@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Card Container -->
        <div class="bg-indigo-900 bg-opacity-30 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden border border-indigo-700 border-opacity-50">
            <!-- Card Header -->
            <div class="px-6 py-5 bg-gradient-to-r from-indigo-800 to-purple-700 border-b border-indigo-700 flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0">
                <div>
                    <h2 class="text-2xl font-bold text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Gestión de Jugadores
                    </h2>
                    <p class="mt-1 text-indigo-200">Lista completa de competidores registrados</p>
                </div>
                <a href="{{ route('players.create') }}" class="inline-flex items-center px-4 py-2 bg-purple-600 hover:bg-purple-500 rounded-lg shadow-sm text-sm font-medium text-white transition duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-indigo-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Nuevo Jugador
                </a>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-indigo-700">
                    <thead class="bg-indigo-800 bg-opacity-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-indigo-300 uppercase tracking-wider">Jugador</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-indigo-300 uppercase tracking-wider">Personaje Principal</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-indigo-300 uppercase tracking-wider">Estilo</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-indigo-300 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-indigo-900 bg-opacity-30 divide-y divide-indigo-700">
                        @forelse($players as $player)
                        <tr class="hover:bg-indigo-800 hover:bg-opacity-50 transition duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-purple-900 bg-opacity-70 flex items-center justify-center border border-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-white">{{ $player->user->name }}</div>
                                        <div class="text-xs text-indigo-200">{{ $player->user->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-purple-300">{{ $player->main_character }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-indigo-700 text-indigo-200">
                                    Competitivo
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex justify-end space-x-2">
                                    <a href="{{ route('players.edit', $player) }}" class="inline-flex items-center px-3 py-1 border border-transparent text-xs font-medium rounded-lg shadow-sm text-indigo-900 bg-indigo-300 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Editar
                                    </a>
                                    <form action="{{ route('players.destroy', $player) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este jugador?');">
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
                            <td colspan="4" class="px-6 py-4 text-center text-indigo-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-indigo-400 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="mt-2 text-sm font-medium">No hay jugadores registrados</p>
                                <a href="{{ route('players.create') }}" class="mt-2 inline-flex items-center px-3 py-1 text-xs font-medium rounded-lg text-white bg-purple-600 hover:bg-purple-500 transition duration-150">
                                    Añadir primer jugador
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($players->hasPages())
            <div class="px-6 py-4 border-t border-indigo-700">
                {{ $players->links('vendor.pagination.custom') }}
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Animaciones personalizadas -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    @keyframes float2 {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-8px) translateX(8px); }
    }
    @keyframes float3 {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-12px) translateX(-5px); }
    }
    @keyframes bg-animate {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }
    @keyframes wiggle {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(5deg); }
        75% { transform: rotate(-5deg); }
    }
    @keyframes spin-slow {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.3; }
        50% { opacity: 0.5; }
    }
    @keyframes pulse-slower {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.4; }
    }
    
    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float2 { animation: float2 7s ease-in-out infinite; }
    .animate-float3 { animation: float3 8s ease-in-out infinite; }
    .bg-animate { animation: bg-animate 15s ease infinite; background-size: 200% 200%; }
    .animate-bounce-slow { animation: bounce-slow 3s ease infinite; }
    .animate-wiggle { animation: wiggle 0.5s ease infinite; }
    .animate-spin-slow { animation: spin-slow 1s linear infinite; }
    .animate-pulse-slow { animation: pulse-slow 6s ease infinite; }
    .animate-pulse-slower { animation: pulse-slower 8s ease infinite; }
    .text-shadow { text-shadow: 0 2px 4px rgba(0,0,0,0.2); }
    .hover-shadow-glow:hover { box-shadow: 0 0 15px rgba(255,255,255,0.3); }
</style>
@endsection