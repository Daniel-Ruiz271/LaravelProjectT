@extends('layouts.app')


<!-- Barra de navegación mejorada con efectos -->
<div class="bg-gradient-to-r from-indigo-800 to-purple-700 shadow-xl relative overflow-hidden">
    <!-- Efectos de partículas decorativas -->
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute top-20 left-1/4 w-12 h-12 rounded-full bg-white/10 animate-float"></div>
        <div class="absolute bottom-1/3 right-1/3 w-8 h-8 rounded-full bg-white/15 animate-float2"></div>
        <div class="absolute top-1/3 left-1/5 w-16 h-16 rounded-full bg-white/20 animate-float3"></div>
    </div>
    
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <h1 class="text-4xl font-bold text-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-3 text-yellow-300 animate-bounce-slow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-shadow">Panel de Administración</span>
                </h1>
                <p class="mt-3 text-indigo-100 text-lg">Bienvenido, <span class="font-semibold text-yellow-200">{{ auth()->user()->name }}</span></p>
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="flex items-center px-5 py-3 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg transition-all duration-300 text-white border border-white/20 hover:border-yellow-300/50 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 group-hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-yellow-200 transition-colors duration-300">Cerrar sesión</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>


@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900 py-4 relative overflow-hidden">
    <!-- Efectos de fondo decorativos -->
    <div class="absolute inset-0 overflow-hidden opacity-10">
        <div class="absolute top-1/4 left-1/5 w-64 h-64 rounded-full bg-purple-600/20 filter blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/3 right-1/4 w-72 h-72 rounded-full bg-indigo-600/20 filter blur-3xl animate-pulse-slower"></div>
    </div>

    <!-- Contenido del dashboard -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 relative z-10">
        <!-- Tarjetas de estadísticas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Jugadores Registrados -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden transition-transform duration-300 hover:scale-[1.03] border border-white/20">
                <div class="p-6 flex items-center">
                    <div class="bg-indigo-500/20 p-4 rounded-full mr-4 border border-indigo-400/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-indigo-200">Jugadores Registrados</h3>
                        <p class="text-2xl font-semibold text-white">{{ $playerCount }}</p>
                    </div>
                </div>
                <div class="px-6 py-3 bg-indigo-800/30 border-t border-white/10">
                    <a href="{{ route('players.index') }}" class="text-sm font-medium text-indigo-300 hover:text-yellow-300 flex items-center transition-colors duration-300">
                        Ver todos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Torneos Activos -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden transition-transform duration-300 hover:scale-[1.03] border border-white/20">
                <div class="p-6 flex items-center">
                    <div class="bg-purple-500/20 p-4 rounded-full mr-4 border border-purple-400/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-purple-200">Torneos Activos</h3>
                        <p class="text-2xl font-semibold text-white">{{ $tournamentCount ?? '0' }}</p>
                    </div>
                </div>
                <div class="px-6 py-3 bg-purple-800/30 border-t border-white/10">
                    <a href="{{ route('tournaments.index') }}" class="text-sm font-medium text-purple-300 hover:text-yellow-300 flex items-center transition-colors duration-300">
                        Ver todos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Juegos Disponibles -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden transition-transform duration-300 hover:scale-[1.03] border border-white/20">
                <div class="p-6 flex items-center">
                    <div class="bg-blue-500/20 p-4 rounded-full mr-4 border border-blue-400/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-blue-200">Juegos Disponibles</h3>
                        <p class="text-2xl font-semibold text-white">{{ $gameCount ?? '0' }}</p>
                    </div>
                </div>
                <div class="px-6 py-3 bg-blue-800/30 border-t border-white/10">
                    <a href="{{ route('games.index') }}" class="text-sm font-medium text-blue-300 hover:text-yellow-300 flex items-center transition-colors duration-300">
                        Ver todos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Acciones rápidas -->
        <div class="mb-8 flex justify-between items-center border-b border-white/20 pb-4">
            <h2 class="text-2xl font-bold text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Acciones rápidas
            </h2>
            <div class="flex items-center space-x-2">
                <span class="text-sm text-indigo-200">Panel de control</span>
                <span class="text-white/30">|</span>
                <span class="text-sm font-medium text-yellow-300">Administración</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Crear Jugador -->
            <a href="{{ route('players.create') }}" class="group transform hover:-translate-y-1 transition-transform duration-300">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden h-full border border-white/20 hover:border-yellow-300/50 transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <div class="bg-indigo-500/20 p-4 rounded-full mb-4 border border-indigo-400/30 group-hover:bg-indigo-500/30 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-300 group-hover:text-yellow-300 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-yellow-300 transition-colors duration-300">Crear Jugador</h3>
                        <p class="text-sm text-indigo-200 group-hover:text-white transition-colors duration-300">Añade un nuevo competidor al sistema</p>
                    </div>
                    <div class="px-6 py-3 bg-indigo-800/30 border-t border-white/10">
                        <span class="text-xs font-medium text-indigo-300 group-hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center">
                            Acción rápida
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Crear Torneo -->
            <a href="{{ route('tournaments.create') }}" class="group transform hover:-translate-y-1 transition-transform duration-300">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden h-full border border-white/20 hover:border-yellow-300/50 transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <div class="bg-purple-500/20 p-4 rounded-full mb-4 border border-purple-400/30 group-hover:bg-purple-500/30 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-purple-300 group-hover:text-yellow-300 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-yellow-300 transition-colors duration-300">Crear Torneo</h3>
                        <p class="text-sm text-purple-200 group-hover:text-white transition-colors duration-300">Organiza una nueva competencia</p>
                    </div>
                    <div class="px-6 py-3 bg-purple-800/30 border-t border-white/10">
                        <span class="text-xs font-medium text-purple-300 group-hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center">
                            Acción rápida
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Crear Juego -->
            <a href="{{ route('games.create') }}" class="group transform hover:-translate-y-1 transition-transform duration-300">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden h-full border border-white/20 hover:border-yellow-300/50 transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <div class="bg-blue-500/20 p-4 rounded-full mb-4 border border-blue-400/30 group-hover:bg-blue-500/30 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-300 group-hover:text-yellow-300 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-yellow-300 transition-colors duration-300">Crear Juego</h3>
                        <p class="text-sm text-blue-200 group-hover:text-white transition-colors duration-300">Agrega nuevos títulos de pelea</p>
                    </div>
                    <div class="px-6 py-3 bg-blue-800/30 border-t border-white/10">
                        <span class="text-xs font-medium text-blue-300 group-hover:text-yellow-300 transition-colors duration-300 flex items-center justify-center">
                            Acción rápida
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <!-- Ver Brackets -->
            <a href="{{ route('admin.brackets.index') }}" class="group transform hover:-translate-y-1 transition-transform duration-300">
                <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden h-full border border-white/20 hover:border-yellow-300/50 transition-all duration-300">
                    <div class="p-6 flex flex-col items-center text-center">
                        <div class="bg-yellow-500/20 p-4 rounded-full mb-4 border border-yellow-400/30 group-hover:bg-yellow-500/30 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-300 group-hover:text-yellow-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-yellow-300 transition-colors duration-300">Ver Brackets</h3>
                        <p class="text-sm text-yellow-200 group-hover:text-white transition-colors duration-300">Consulta los emparejamientos</p>
                    </div>
                    <div class="px-6 py-3 bg-yellow-800/30 border-t border-white/10">
                        <span class="text-xs font-medium text-yellow-300 group-hover:text-yellow-400 transition-colors duration-300 flex items-center justify-center">
                            Acción rápida
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
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
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }
    @keyframes wiggle {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(5deg); }
        75% { transform: rotate(-5deg); }
    }
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.4; }
    }
    @keyframes pulse-slower {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.3; }
    }
    
    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float2 { animation: float2 7s ease-in-out infinite; }
    .animate-float3 { animation: float3 8s ease-in-out infinite; }
    .animate-bounce-slow { animation: bounce-slow 3s ease infinite; }
    .animate-wiggle { animation: wiggle 0.5s ease infinite; }
    .animate-pulse-slow { animation: pulse-slow 6s ease infinite; }
    .animate-pulse-slower { animation: pulse-slower 8s ease infinite; }
    .text-shadow { text-shadow: 0 2px 4px rgba(0,0,0,0.3); }
</style>
@endsection