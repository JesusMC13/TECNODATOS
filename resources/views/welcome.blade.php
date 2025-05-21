<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sistema de Gestión Educativa de TECNODATOS - Soluciones tecnológicas para la educación" />

    <title>TECNODATOS - Software Educativo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Estilos Tailwind CSS */
            /* ... (mantener los estilos existentes) ... */
        </style>
    @endif

    <style>
        :root {
            --color-primary: #4f46e5;
            --color-secondary: #10b981;
            --color-accent: #f53003;
            --color-dark: #1b1b18;
            --color-light: #252590;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0f0f57 0%, #f5f5f3 100%);
        }

        .dark .gradient-bg {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
        }

        .btn-primary {
            background-color: var(--color-primary);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #4338ca;
            transform: translateY(-2px);
        }

        .logo-transition {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .logo-transition:hover {
            transform: scale(1.05);
        }

        /* Imagen hero - estilo para que ocupe todo el espacio y mantenga proporción */
        .hero-image-container {
            border-radius: 1rem; /* mismo radio que el recuadro anterior */
            overflow: hidden;
            aspect-ratio: 1 / 1; /* aspecto cuadrado */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background-color: transparent; /* elimina fondo café */
        }

        .hero-image-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 1rem;
        }
    </style>
</head>
<body class="gradient-bg text-[#1b1b18] dark:text-[#EDEDEC] flex flex-col min-h-screen">
<!-- Header -->
<header class="w-full max-w-7xl mx-auto px-6 py-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
            <span class="text-xl font-bold">TECNODATOS</span>
        </div>

        @if (Route::has('login'))
            <nav class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition-colors">
                        Panel
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                        Iniciar Sesión
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors">
                            Registrarse
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</header>

<!-- Main Content -->
<main class="flex-grow flex items-center justify-center px-6 py-12">
    <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Text Content -->
        <div class="space-y-8">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Soluciones Tecnológicas para
                <span class="text-indigo-600 dark:text-indigo-400">la Educación</span>
            </h1>

            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-lg">
                Gestiona, organiza y optimiza todos los procesos educativos con nuestra plataforma integral diseñada para instituciones modernas.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('register') }}" class="btn-primary px-6 py-3 rounded-md text-white font-medium text-center">
                    Comenzar Ahora
                </a>
                <a href="#features" class="px-6 py-3 border border-gray-300 dark:border-gray-700 rounded-md font-medium text-center hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    Conocer Más
                </a>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="relative logo-transition">
            <div class="hero-image-container">
                <img src="/imagenes/tec.png" alt="Mi imagen" />
            </div>
        </div>
    </div>
</main>

<!-- Features Section -->
<section id="features" class="py-16 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Características Principales</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Descubre cómo nuestra plataforma puede transformar la gestión educativa de tu institución
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Gestión Integral</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Controla todo el ciclo educativo desde un solo lugar.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 114 0v6m-4 4h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Seguridad</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Datos protegidos con tecnologías modernas y accesos controlados.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16v-4m0 0V8a4 4 0 018 0v4m-8 0h8" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Fácil de Usar</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Interfaz intuitiva diseñada para todos los usuarios.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-100 dark:bg-gray-800 py-8 mt-auto">
    <div class="max-w-7xl mx-auto px-6 text-center text-gray-600 dark:text-gray-400">
        &copy; 2025 TECNODATOS. Todos los derechos reservados.
    </div>
</footer>
</body>
</html>
