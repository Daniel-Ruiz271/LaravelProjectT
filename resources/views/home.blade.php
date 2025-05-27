@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-900 py-4 relative overflow-hidden">
    <!-- Hero Section -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-32">
        <div class="text-center">
            <!-- Efecto de partículas (simulado con elementos SVG) -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
                <svg class="absolute top-20 left-1/4 opacity-30 animate-float" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="10" fill="#A5B4FC"/>
                </svg>
                <svg class="absolute top-40 right-1/3 opacity-40 animate-float-delay" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="7" fill="#C7D2FE"/>
                </svg>
                <svg class="absolute bottom-1/3 left-1/3 opacity-50 animate-float-delay-2" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12.5" cy="12.5" r="6" fill="#818CF8"/>
                </svg>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-extrabold text-white tracking-tight mb-6">
                <span class="block">Domina los</span>
                <span class="block bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-yellow-500">Torneos Competitivos</span>
            </h1>
            
            <p class="mt-6 max-w-2xl mx-auto text-xl text-indigo-100 sm:text-2xl md:mt-8">
                La plataforma definitiva para gamers que buscan competir al más alto nivel y demostrar su habilidad.
            </p>
            
            <div class="mt-10 flex justify-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="group relative flex items-center px-8 py-4 bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-lg transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 text-white font-semibold">Ir al Panel</span>
                        <span class="ml-2 relative z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                        <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    </a>
                @else
                    <a href="{{ route('register') }}" class="group relative flex items-center px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 rounded-lg shadow-lg transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 text-indigo-900 font-bold">Regístrate Gratis</span>
                        <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></span>
                    </a>
                    <a href="{{ route('login') }}" class="group relative flex items-center px-8 py-4 border-2 border-yellow-400 hover:bg-yellow-400/10 rounded-lg shadow-lg transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 text-yellow-400 font-semibold group-hover:text-white">Iniciar Sesión</span>
                    </a>
                @endauth
            </div>
        </div>
    </div>
    
    <!-- Sección de características -->
    <div class="relative z-10 bg-white/5 backdrop-blur-md rounded-3xl max-w-7xl mx-auto px-6 py-12 sm:px-6 lg:px-8 lg:py-16 shadow-xl border border-white/10">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-yellow-400 bg-yellow-400/10 rounded-full mb-4">CARACTERÍSTICAS</span>
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Todo lo que necesitas para <span class="text-yellow-400">dominar</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Característica 1 -->
            <div class="group relative bg-gradient-to-br from-indigo-900/50 to-purple-900/50 p-6 rounded-2xl shadow-lg border border-white/10 hover:border-yellow-400/30 transition-all duration-300 overflow-hidden">
                <div class="absolute -right-10 -top-10 w-28 h-28 rounded-full bg-yellow-400/10 group-hover:bg-yellow-400/20 transition-all duration-500"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="flex-shrink-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl p-3 shadow-md">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Torneos Premium</h3>
                    <p class="text-indigo-200">
                        Compite en torneos con premios en efectivo, organizados profesionalmente y con sistemas anti-trampas.
                    </p>
                </div>
            </div>
            
            <!-- Característica 2 -->
            <div class="group relative bg-gradient-to-br from-indigo-900/50 to-purple-900/50 p-6 rounded-2xl shadow-lg border border-white/10 hover:border-yellow-400/30 transition-all duration-300 overflow-hidden">
                <div class="absolute -left-10 -bottom-10 w-28 h-28 rounded-full bg-yellow-400/10 group-hover:bg-yellow-400/20 transition-all duration-500"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="flex-shrink-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl p-3 shadow-md">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Calendario Inteligente</h3>
                    <p class="text-indigo-200">
                        Planifica tu participación con nuestro sistema que se adapta a tu zona horaria y te envía recordatorios.
                    </p>
                </div>
            </div>
            
            <!-- Característica 3 -->
            <div class="group relative bg-gradient-to-br from-indigo-900/50 to-purple-900/50 p-6 rounded-2xl shadow-lg border border-white/10 hover:border-yellow-400/30 transition-all duration-300 overflow-hidden">
                <div class="absolute -right-10 -bottom-10 w-28 h-28 rounded-full bg-yellow-400/10 group-hover:bg-yellow-400/20 transition-all duration-500"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="flex-shrink-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl p-3 shadow-md">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Seguridad Avanzada</h3>
                    <p class="text-indigo-200">
                        Tecnología anti-cheat y moderadores profesionales para garantizar competencias limpias y justas.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sección de estadísticas -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="bg-gradient-to-r from-indigo-900/40 to-purple-900/40 rounded-3xl p-8 md:p-12 border border-white/10 shadow-2xl backdrop-blur-sm">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl font-bold text-yellow-400 mb-2" data-count="250">0</div>
                    <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider">Torneos activos</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-yellow-400 mb-2" data-count="50000">0</div>
                    <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider">Jugadores registrados</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-yellow-400 mb-2" data-count="1000000">0</div>
                    <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider">Premios repartidos</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-yellow-400 mb-2" data-count="99">0</div>
                    <div class="text-sm font-semibold text-indigo-200 uppercase tracking-wider">Satisfacción</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sección de testimonios -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-yellow-400 bg-yellow-400/10 rounded-full mb-4">TESTIMONIOS</span>
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Lo que dicen los <span class="text-yellow-400">competidores</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonio 1 -->
            <div class="group relative bg-gradient-to-br from-indigo-900/50 to-purple-900/50 p-8 rounded-2xl shadow-lg border border-white/10 hover:border-yellow-400/30 transition-all duration-300">
                <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full bg-yellow-400 flex items-center justify-center shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <p class="text-indigo-100 italic mb-6">
                    "La mejor plataforma para torneos competitivos. He ganado más de $5,000 en premios y conocido jugadores increíbles."
                </p>
                <div class="flex items-center">
                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center shadow-inner">
                        <span class="text-white font-bold">JD</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Juan Díaz</h4>
                        <p class="text-yellow-400 text-sm">Competidor Elite</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonio 2 -->
            <div class="group relative bg-gradient-to-br from-indigo-900/50 to-purple-900/50 p-8 rounded-2xl shadow-lg border border-white/10 hover:border-yellow-400/30 transition-all duration-300">
                <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full bg-yellow-400 flex items-center justify-center shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <p class="text-indigo-100 italic mb-6">
                    "Como streamer, esta plataforma me ha dado contenido increíble y una comunidad de jugadores serios."
                </p>
                <div class="flex items-center">
                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center shadow-inner">
                        <span class="text-white font-bold">MG</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">María González</h4>
                        <p class="text-yellow-400 text-sm">Streamer & Competidora</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonio 3 -->
            <div class="group relative bg-gradient-to-br from-indigo-900/50 to-purple-900/50 p-8 rounded-2xl shadow-lg border border-white/10 hover:border-yellow-400/30 transition-all duration-300">
                <div class="absolute -top-4 -left-4 w-12 h-12 rounded-full bg-yellow-400 flex items-center justify-center shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <p class="text-indigo-100 italic mb-6">
                    "Empecé como novato y en 6 meses ya estaba compitiendo en torneos profesionales. ¡La curva de aprendizaje es increíble!"
                </p>
                <div class="flex items-center">
                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center shadow-inner">
                        <span class="text-white font-bold">CL</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Carlos López</h4>
                        <p class="text-yellow-400 text-sm">Novato del Año</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA Final -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-32">
        <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-3xl p-8 md:p-12 shadow-2xl transform hover:scale-[1.01] transition-transform duration-300">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-indigo-900 sm:text-4xl mb-6">
                    ¿Listo para <span class="underline decoration-white/30">dominar</span> la competencia?
                </h2>
                <div class="mt-8 flex justify-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="group relative flex items-center px-8 py-4 bg-indigo-900 hover:bg-indigo-800 rounded-lg shadow-lg transition-all duration-300 overflow-hidden">
                            <span class="relative z-10 text-white font-bold">Ver Torneos</span>
                            <span class="ml-2 relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </span>
                            <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="group relative flex items-center px-8 py-4 bg-indigo-900 hover:bg-indigo-800 rounded-lg shadow-lg transition-all duration-300 overflow-hidden">
                            <span class="relative z-10 text-white font-bold">Regístrate Gratis</span>
                            <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                        </a>
                        <a href="{{ route('login') }}" class="group relative flex items-center px-8 py-4 bg-white hover:bg-gray-100 rounded-lg shadow-lg transition-all duration-300 overflow-hidden">
                            <span class="relative z-10 text-indigo-900 font-bold">Iniciar Sesión</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    
    <!-- Efecto de ondas en la parte inferior -->
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden">
        <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgba(255,255,255,0.03)" fill-opacity="1" d="M0,256L48,261.3C96,267,192,277,288,250.7C384,224,480,160,576,160C672,160,768,224,864,218.7C960,213,1056,139,1152,117.3C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</div>

<!-- Animación para los contadores -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('[data-count]');
        const speed = 200;
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const increment = target / speed;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
            
            function updateCount() {
                const current = +counter.innerText;
                if (current < target) {
                    counter.innerText = Math.ceil(current + increment);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            }
        });
    });
</script>

<style>
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-float-delay {
        animation: float 6s ease-in-out infinite 1s;
    }
    .animate-float-delay-2 {
        animation: float 6s ease-in-out infinite 2s;
    }
</style>
@endsection