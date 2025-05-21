<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Gestión Educativa de TECNODATOS - Soluciones tecnológicas para la educación">

    <title>TECNODATOS - Software Educativo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

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
            --color-light: #FDFDFC;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #FDFDFC 0%, #f5f5f3 100%);
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
            <div class="bg-[#fff2f2] dark:bg-[#1D0002] rounded-xl overflow-hidden aspect-square flex items-center justify-center p-8">
                <!-- Laravel Logo SVG -->
                <svg class="w-full h-full text-[#F53003] dark:text-[#F61500]" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- ... (mantener el SVG existente) ... -->
                </svg>
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
                    Administra estudiantes, profesores, cursos y horarios desde una sola plataforma.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Seguridad Avanzada</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Protección de datos con cifrado de última generación y controles de acceso.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl">
                <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Reportes en Tiempo Real</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Genera informes detallados y análisis para una mejor toma de decisiones.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-100 dark:bg-gray-900 py-8">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
                <span class="text-lg font-bold">TECNODATOS</span>
            </div>

            <div class="text-gray-600 dark:text-gray-400 text-sm">
                © {{ date('Y') }} TECNODATOS. Todos los derechos reservados.
            </div>
        </div>
    </div>
</footer>
</body>
</html>
