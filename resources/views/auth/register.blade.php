<x-guest-layout>
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-900">Crear cuenta</h2>
        <p class="text-gray-500 mt-1 text-sm">Completa el formulario para registrarte en el sistema</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nombre</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="block w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#1a3a1f] focus:border-transparent transition @error('name') border-red-400 @enderror"
                    placeholder="Juan">
                <x-input-error :messages="$errors->get('name')" class="mt-1" />
            </div>
            <div>
                <label for="apellido" class="block text-sm font-medium text-gray-700 mb-1.5">Apellido</label>
                <input id="apellido" type="text" name="apellido" value="{{ old('apellido') }}"
                    class="block w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#1a3a1f] focus:border-transparent transition"
                    placeholder="Pérez">
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Correo electrónico</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="block w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#1a3a1f] focus:border-transparent transition @error('email') border-red-400 @enderror"
                    placeholder="correo@ejemplo.com">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div>
            <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1.5">Teléfono <span class="text-gray-400 font-normal">(opcional)</span></label>
            <input id="telefono" type="text" name="telefono" value="{{ old('telefono') }}"
                class="block w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#1a3a1f] focus:border-transparent transition"
                placeholder="300 123 4567">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Contraseña</label>
                <input id="password" type="password" name="password" required
                    class="block w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#1a3a1f] focus:border-transparent transition @error('password') border-red-400 @enderror"
                    placeholder="••••••••">
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1.5">Confirmar</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="block w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#1a3a1f] focus:border-transparent transition"
                    placeholder="••••••••">
            </div>
        </div>

        <button type="submit"
            class="w-full py-2.5 px-4 bg-[#1a3a1f] hover:bg-[#2d5a35] text-white font-semibold rounded-lg text-sm transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1a3a1f]">
            Crear cuenta
        </button>

        <p class="text-center text-sm text-gray-500">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="text-[#2d5a35] hover:text-[#1a3a1f] font-medium">Inicia sesión</a>
        </p>
    </form>
</x-guest-layout>
