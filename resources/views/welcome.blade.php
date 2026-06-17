<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroInventario — Sistema de Gestión Agrícola</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        body { font-family: 'Inter', sans-serif; background: #f9faf7; }
        .hero-bg {
            background: linear-gradient(135deg, #1a3a1f 0%, #2d5a35 50%, #3a7040 100%);
        }
    </style>
</head>
<body class="antialiased">

    {{-- Navbar --}}
    <nav class="absolute top-0 left-0 right-0 z-10 px-6 lg:px-12 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 bg-lime-400 rounded-xl flex items-center justify-center">
                <svg class="w-5 h-5 text-green-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C7 3 3 7.5 3 12s4 9 9 9 9-4 9-9c0-1.5-.5-3-1-4.5M16 3s-1 3 1 5M20 7s-3 1-5-1"/>
                </svg>
            </div>
            <span class="text-white font-bold text-lg">AgroInventario</span>
        </div>
        <div class="flex items-center gap-3">
            @auth
                <a href="{{ route('dashboard') }}" class="text-white/80 hover:text-white text-sm font-medium transition">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white/80 hover:text-white text-sm font-medium transition">Iniciar sesión</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-lime-400 hover:bg-lime-300 text-green-900 font-semibold text-sm px-4 py-2 rounded-lg transition">
                        Registrarse
                    </a>
                @endif
            @endauth
        </div>
    </nav>

    {{-- Hero --}}
    <section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
        {{-- Patrón de fondo --}}
        <div class="absolute inset-0 opacity-5">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="dots" width="30" height="30" patternUnits="userSpaceOnUse">
                        <circle cx="2" cy="2" r="2" fill="white"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#dots)" />
            </svg>
        </div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-lime-400/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-green-300/10 rounded-full blur-3xl translate-y-1/3 -translate-x-1/4"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-12 py-24 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-flex items-center gap-2 bg-lime-400/15 text-lime-300 text-xs font-semibold px-3 py-1.5 rounded-full border border-lime-400/20 mb-6">
                    <span class="w-1.5 h-1.5 bg-lime-400 rounded-full"></span>
                    Sistema de Gestión Agrícola
                </span>
                <h1 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight mb-6">
                    Controla tu inventario<br>
                    <span class="text-lime-400">del campo al almacén</span>
                </h1>
                <p class="text-white/65 text-lg leading-relaxed mb-8 max-w-lg">
                    Gestiona productos agrícolas, proveedores, compras y ventas desde una sola plataforma. Simple, rápido y confiable.
                </p>
                <div class="flex flex-wrap gap-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 bg-lime-400 hover:bg-lime-300 text-green-900 font-bold px-6 py-3 rounded-xl transition text-sm">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            Ir al Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center gap-2 bg-lime-400 hover:bg-lime-300 text-green-900 font-bold px-6 py-3 rounded-xl transition text-sm">
                            Comenzar ahora
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </a>
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-2 border border-white/20 hover:bg-white/10 text-white font-semibold px-6 py-3 rounded-xl transition text-sm">
                            Crear cuenta gratis
                        </a>
                    @endauth
                </div>
            </div>

            {{-- Features grid --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'title' => 'Control de Stock', 'desc' => 'Monitoreo en tiempo real con alertas de bajo inventario', 'color' => 'from-emerald-500/20 to-emerald-600/10'],
                    ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'title' => 'Reportes', 'desc' => 'Análisis detallados de ventas y movimientos', 'color' => 'from-blue-500/20 to-blue-600/10'],
                    ['icon' => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17', 'title' => 'Ventas y Compras', 'desc' => 'Registro completo de transacciones con facturación', 'color' => 'from-amber-500/20 to-amber-600/10'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Proveedores', 'desc' => 'Gestión centralizada de todos tus proveedores', 'color' => 'from-purple-500/20 to-purple-600/10'],
                ] as $f)
                <div class="bg-white/8 backdrop-blur-sm border border-white/10 rounded-2xl p-5 hover:bg-white/12 transition">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br {{ $f['color'] }} border border-white/10 flex items-center justify-center mb-3">
                        <svg class="w-5 h-5 text-lime-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $f['icon'] }}"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold text-sm mb-1">{{ $f['title'] }}</h3>
                    <p class="text-white/50 text-xs leading-relaxed">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <div class="bg-[#1a3a1f] text-center py-4">
        <p class="text-white/30 text-xs">© {{ date('Y') }} AgroInventario. Todos los derechos reservados.</p>
    </div>

</body>
</html>
