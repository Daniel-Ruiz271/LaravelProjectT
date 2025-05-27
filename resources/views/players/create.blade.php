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

            <!-- Menú de usuario con avatar circular -->
            <div class="hidden md:ml-4 md:flex md:items-center">
                <div class="ml-3 relative">
                    <div class="flex items-center space-x-2 group">
                        <span class="text-white group-hover:text-yellow-200 transition-colors duration-300">{{ Auth::user()->name }}</span>
                        <div class="h-8 w-8 rounded-full bg-purple-400 border-2 border-yellow-300 flex items-center justify-center shadow-md group-hover:rotate-12 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900 py-12 relative overflow-hidden">
    <!-- Efectos decorativos de fondo -->
    <div class="absolute inset-0 overflow-hidden opacity-20">
        <div class="absolute top-1/4 left-1/5 w-40 h-40 rounded-full bg-purple-600/30 filter blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/3 right-1/4 w-48 h-48 rounded-full bg-indigo-600/30 filter blur-3xl animate-pulse-slower"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Card Container con efecto vidrio --> 
        <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden border border-white/20">
            <!-- Card Header con gradiente animado -->
            <div class="px-8 py-6 bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-500 bg-animate">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <h2 class="text-2xl font-bold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-yellow-300 animate-bounce-slow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span class="text-shadow">Registrar Nuevo Jugador</span>
                        </h2>
                        <p class="mt-1 text-purple-100">¡Prepárate para una nueva competencia!</p>
                    </div>
                    <a href="{{ route('players.index') }}" class="inline-flex items-center px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg text-white border border-white/20 hover:border-yellow-300/50 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 group-hover:animate-wiggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span class="group-hover:text-yellow-200 transition-colors duration-300">Volver al listado</span>
                    </a>
                </div>
            </div>

            <!-- Form Container -->
            <div class="px-8 py-6 bg-white/5 backdrop-blur-md">
                <form action="{{ route('players.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- User Selection -->
                    <div class="transform hover:scale-[1.01] transition-transform duration-300">
                        <label for="user_id" class="block text-sm font-medium text-purple-100 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Usuario asociado
                        </label>
                        <div class="mt-1 relative">
                            <select id="user_id" name="user_id" required
                                class="block w-full pl-4 pr-10 py-3 text-base border border-purple-300/50 bg-white/10 text-white focus:ring-2 focus:ring-yellow-300 focus:border-yellow-300 rounded-lg shadow-sm transition duration-200 hover:bg-white/20">
                                <option value="" disabled selected class="text-gray-800">Seleccione un usuario...</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" class="text-gray-800">{{ $user->name }} &lt;{{ $user->email }}&gt;</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-purple-200">Selecciona el guerrero que se unirá a la arena</p>
                    </div>

                    <!-- Main Character -->
                    <div class="transform hover:scale-[1.01] transition-transform duration-300">
                        <label for="main_character" class="block text-sm font-medium text-purple-100 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Personaje principal
                        </label>
                        <div class="mt-1">
                            <input type="text" id="main_character" name="main_character" required
                                class="block w-full px-4 py-3 border border-purple-300/50 bg-white/10 text-white placeholder-purple-200 rounded-lg shadow-sm focus:ring-2 focus:ring-yellow-300 focus:border-yellow-300 transition duration-200 hover:bg-white/20"
                                placeholder="Ej: Ryu, Scorpion, Mario, Pikachu">
                        </div>
                        <p class="mt-2 text-sm text-purple-200">¿Con qué personaje dominará la competencia?</p>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-3 pt-6 border-t border-white/20">
                        <button type="reset" class="mt-3 sm:mt-0 inline-flex items-center px-6 py-3 border border-purple-300/50 text-sm font-medium rounded-lg text-purple-100 bg-white/10 hover:bg-white/20 hover:text-white focus:outline-none focus:ring-2 focus:ring-yellow-300 transition duration-300 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 group-hover:animate-spin-slow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            Reiniciar
                        </button>
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-lg shadow-md text-purple-900 bg-gradient-to-r from-yellow-300 to-yellow-400 hover:from-yellow-400 hover:to-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition duration-300 transform hover:scale-105 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 group-hover:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            ¡Registrar Guerrero!
                        </button>
                    </div>
                </form>
            </div>
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