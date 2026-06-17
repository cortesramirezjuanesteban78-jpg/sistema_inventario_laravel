<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'AgroInventario') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="antialiased">
<div class="min-h-screen flex">

    {{-- Panel izquierdo — imagen / branding --}}
    <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-[#1a3a1f]">
        {{-- Patrón decorativo --}}
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        {{-- Círculos decorativos --}}
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-lime-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-16 w-80 h-80 bg-green-300/15 rounded-full blur-3xl"></div>

        <div class="relative z-10 flex flex-col justify-between p-12 w-full">
            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-lime-400 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C7 3 3 7.5 3 12s4 9 9 9 9-4 9-9c0-1.5-.5-3-1-4.5M16 3s-1 3 1 5M20 7s-3 1-5-1"/>
                    </svg>
                </div>
                <span class="text-white font-bold text-xl">AgroInventario</span>
            </div>

            {{-- Hero text --}}
            <div>
                <h1 class="text-4xl font-bold text-white leading-tight mb-4">
                    Gestión inteligente<br>
                    <span class="text-lime-400">del campo al almacén</span>
                </h1>
                <p class="text-white/60 text-lg leading-relaxed max-w-md">
                    Controla tu inventario agrícola, proveedores, ventas y movimientos desde un solo lugar.
                </p>

                {{-- Features --}}
                <div class="mt-10 space-y-4">
                    @foreach ([
                        ['icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'text' => 'Control de stock en tiempo real'],
                        ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'text' => 'Reportes y estadísticas detalladas'],
                        ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'text' => 'Gestión de proveedores y clientes'],
                    ] as $feature)
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-lime-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $feature['icon'] }}"/>
                            </svg>
                        </div>
                        <span class="text-white/75 text-sm">{{ $feature['text'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <p class="text-white/30 text-xs">© {{ date('Y') }} AgroInventario. Sistema de gestión agrícola.</p>
        </div>
    </div>

    {{-- Panel derecho — formulario --}}
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 bg-[#f9faf7]">
        <div class="w-full max-w-md">
            {{-- Logo móvil --}}
            <div class="flex lg:hidden items-center gap-2 mb-8">
                <div class="w-8 h-8 bg-[#1a3a1f] rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-lime-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3C7 3 3 7.5 3 12s4 9 9 9 9-4 9-9c0-1.5-.5-3-1-4.5M16 3s-1 3 1 5M20 7s-3 1-5-1"/>
                    </svg>
                </div>
                <span class="font-bold text-[#1a3a1f]">AgroInventario</span>
            </div>
            {{ $slot }}
        </div>
    </div>

</div>
</body>
</html>
