@extends('layouts.app')


<!-- Barra de navegación superior -->
<nav class="bg-gradient-to-r from-indigo-800 to-purple-700 shadow-xl relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="flex-shrink-0 flex items-center">
                    <svg class="h-8 w-8 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="ml-2 text-white font-bold text-lg">TorneosGG</span>
                </a>
            </div>
            <div class="flex items-center space-x-4">
              
                
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center text-indigo-200 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Encabezado del perfil -->
<div class="bg-gradient-to-r from-indigo-600 to-purple-700 shadow-xl">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center">
                <div class="relative">
                    <div class="h-24 w-24 rounded-full bg-indigo-500 flex items-center justify-center shadow-lg border-4 border-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    @if($player->is_online)
                        <span class="absolute bottom-0 right-0 block h-5 w-5 rounded-full bg-green-400 ring-2 ring-white"></span>
                    @endif
                </div>
                <div class="ml-6">
                    <h2 class="text-2xl font-bold text-white">{{ $player->name }}</h2>
                    <div class="flex items-center mt-2">
                        <span class="text-indigo-100">Nivel {{ $player->level ?? 1 }}</span>
                        <span class="mx-2 text-white">•</span>
                       
                    </div>
                    <div class="mt-3 flex space-x-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            {{ $player->rank ?? 'Novato' }}
                        </span>
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>


@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900 py-5 relative overflow-hidden">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Columna izquierda - Estadísticas -->
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-500 dark:from-indigo-700 dark:to-indigo-600 px-6 py-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-white">📊 Estadísticas</h3>
                    <span class="text-xs bg-white/20 text-white px-2 py-1 rounded-full">Actualizado hoy</span>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex justify-between items-center pb-4 border-b border-gray-100 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="bg-indigo-100 dark:bg-indigo-900/20 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300 font-medium">Partidas jugadas</span>
                        </div>
                        <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">{{ $totalMatches }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center pb-4 border-b border-gray-100 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="bg-green-100 dark:bg-green-900/20 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300 font-medium">Partidas ganadas</span>
                        </div>
                        <span class="text-2xl font-bold text-green-600 dark:text-green-400">{{ $matchesWon }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="bg-purple-100 dark:bg-purple-900/20 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <span class="text-gray-600 dark:text-gray-300 font-medium">Ratio de victorias</span>
                        </div>
                        <span class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                            {{ $totalMatches > 0 ? round(($matchesWon / $totalMatches) * 100, 2) : 0 }}%
                        </span>
                    </div>
                </div>

                <!-- Gráfico de progreso mejorado -->
                <div class="mt-8">
                    <div class="flex justify-between mb-2">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Progreso</span>
                        <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400">{{ $totalMatches > 0 ? round(($matchesWon / $totalMatches) * 100, 2) : 0 }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                        <div class="bg-gradient-to-r from-green-400 to-blue-500 h-2.5 rounded-full" 
                             style="width: {{ $totalMatches > 0 ? ($matchesWon / $totalMatches) * 100 : 0 }}%"></div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <span>0%</span>
                        <span>50%</span>
                        <span>100%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna central - Próximos matches -->
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <div class="bg-gradient-to-r from-purple-600 to-purple-500 dark:from-purple-700 dark:to-purple-600 px-6 py-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-white">📅 Próximos Matches</h3>
                    
                </div>
            </div>
            <div class="p-6">
                @forelse ($upcomingMatches as $match)
                    <div class="border border-gray-200 dark:border-gray-700 p-4 mb-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200 group">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="bg-indigo-100 dark:bg-indigo-900/20 p-3 rounded-lg mr-3 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-800/30 transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white">
                                        Contra: {{ $match->player1_id == $player->id ? optional($match->player2)->name : optional($match->player1)->name }}
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        {{ $match->tournament->name ?? 'Amistoso' }}
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="mt-1">
                                    <a href="#" class="text-xs text-indigo-600 dark:text-indigo-400 hover:underline">Detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">No tienes matches pendientes</p>
                        
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Columna derecha - Historial -->
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <div class="bg-gradient-to-r from-green-600 to-green-500 dark:from-green-700 dark:to-green-600 px-6 py-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-white">📜 Historial de Partidas</h3>
                    
                </div>
            </div>
            <div class="p-6">
                @forelse ($completedMatches as $match)
                    <div class="border border-gray-200 dark:border-gray-700 p-4 mb-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="h-10 w-10 rounded-full bg-indigo-100 dark:bg-indigo-900/20 flex items-center justify-center">
                                        <span class="text-indigo-600 dark:text-indigo-400 font-medium text-sm">
                                            {{ substr($match->player1->name, 0, 1) }}{{ substr($match->player2->name, 0, 1) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                        {{ $match->player1->name }} vs {{ $match->player2->name }}
                                    </p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ $match->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                            <span class="text-xs {{ $match->winner_id == $player->id ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-200' : 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-200' }} px-2 py-1 rounded-full">
                                {{ $match->winner_id == $player->id ? 'Ganaste' : 'Perdiste' }}
                            </span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                {{ $match->tournament->name ?? 'Amistoso' }}
                            </span>
                            
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">No has jugado ninguna partida todavía</p>
                        
                    </div>
                @endforelse
                
                @if($completedMatches->count() > 0)
                    <div class="mt-4 text-center">
                        
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
