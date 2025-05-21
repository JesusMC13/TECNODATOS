    <x-guest-layout>
        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden md:max-w-3xl my-12 border border-indigo-100 dark:border-gray-700">
            <!-- Encabezado con logo -->
            <div class="bg-gradient-to-r from-indigo-600 to-blue-600 dark:from-indigo-800 dark:to-blue-800 py-6 px-8 text-center">
                <div class="flex items-center justify-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <h1 class="text-2xl font-bold text-white">Registro en TECNODATOS</h1>
                </div>
                <p class="mt-2 text-blue-100 dark:text-blue-200 text-sm">
                    Complete sus datos para acceder a nuestro sistema educativo
                </p>
            </div>

            <!-- Contenido del formulario -->
            <div class="p-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Sección de información personal -->
                    <div class="mb-8">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-2 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Información Personal
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Nombre -->
                            <div>
                                <x-input-label for="nombre" :value="__('Nombre(s)')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <x-text-input id="nombre" class="block mt-1 w-full pl-10" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="given-name" placeholder="Ej. Juan" />
                                </div>
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                            </div>

                            <!-- Apellido Paterno -->
                            <div>
                                <x-input-label for="apellido_paterno" :value="__('Apellido Paterno')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                        </svg>
                                    </div>
                                    <x-text-input id="apellido_paterno" class="block mt-1 w-full pl-10" type="text" name="apellido_paterno" :value="old('apellido_paterno')" required autocomplete="family-name" placeholder="Ej. Pérez" />
                                </div>
                                <x-input-error :messages="$errors->get('apellido_paterno')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                            </div>

                            <!-- Apellido Materno -->
                            <div>
                                <x-input-label for="apellido_materno" :value="__('Apellido Materno')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                        </svg>
                                    </div>
                                    <x-text-input id="apellido_materno" class="block mt-1 w-full pl-10" type="text" name="apellido_materno" :value="old('apellido_materno')" autocomplete="additional-name" placeholder="Ej. López" />
                                </div>
                                <x-input-error :messages="$errors->get('apellido_materno')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                            </div>
                        </div>
                    </div>

                    <!-- Sección de credenciales -->
                    <div class="mb-8">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 border-b pb-2 border-gray-200 dark:border-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-2 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Credenciales de Acceso
                        </h2>

                        <!-- Email -->
                        <div class="mb-6">
                            <x-input-label for="email" :value="__('Correo Electrónico')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <x-text-input id="email" class="block mt-1 w-full pl-10" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="usuario@tecnodatos.com" />
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                        </div>

                        <!-- Contraseña -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="password" :value="__('Contraseña')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <x-text-input id="password" class="block mt-1 w-full pl-10" type="password" name="password" required autocomplete="new-password" placeholder="Mínimo 8 caracteres" />
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Use 8 o más caracteres con una combinación de letras, números y símbolos</p>
                            </div>

                            <!-- Confirmar Contraseña -->
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1" />
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full pl-10" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repita su contraseña" />
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600 dark:text-red-400" />
                            </div>
                        </div>
                    </div>

                    <!-- Términos y condiciones -->
                    <div class="mb-8">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600" required>
                            </div>
                            <div class="ml-3">
                                <label for="terms" class="text-sm text-gray-700 dark:text-gray-300">
                                    Acepto los <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 font-medium">Términos de Servicio</a> y la <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 font-medium">Política de Privacidad</a> de TECNODATOS
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Botón de Registro -->
                    <div class="flex items-center justify-between">
                        <a class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300" href="{{ route('login') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            ¿Ya tienes una cuenta?
                        </a>

                        <x-primary-button class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 dark:from-indigo-700 dark:to-blue-700 dark:hover:from-indigo-800 dark:hover:to-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            {{ __('Registrarse') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>
