<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SystemCloud ERP</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-900 dark:text-white">
                        SystemCloud ERP
                    </a>
                </div>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-900 dark:text-white hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2">
                                Dashboard
                            </a>
                        @else
                            <a href="" class="text-gray-900 dark:text-white hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="" class="text-gray-900 dark:text-white hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2">
                                    Registrar
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-white dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-gray-900 dark:text-white">
                Gerencie seu negócio com facilidade
            </h1>
            <p class="mt-4 text-xl text-gray-600 dark:text-gray-300">
                SystemCloud ERP é a solução completa para gestão empresarial.
            </p>
            <div class="mt-8">
                <a href="" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    Comece agora
                </a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white">
                Recursos Incríveis
            </h2>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-4xl mb-4">
                        📊
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        Gestão Financeira
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        Controle suas finanças de forma simples e eficiente.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-4xl mb-4">
                        📦
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        Controle de Estoque
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        Gerencie seu estoque com precisão e agilidade.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
                    <div class="text-blue-600 text-4xl mb-4">
                        👥
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        Gestão de Pessoas
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        Administre sua equipe de forma eficaz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 dark:text-white">
                Planos e Preços
            </h2>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plan 1 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        Básico
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        Ideal para pequenos negócios.
                    </p>
                    <p class="mt-4 text-4xl font-bold text-gray-900 dark:text-white">
                        R$ 99/mês
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="text-gray-600 dark:text-gray-300">✔️ Gestão Financeira</li>
                        <li class="text-gray-600 dark:text-gray-300">✔️ Controle de Estoque</li>
                        <li class="text-gray-600 dark:text-gray-300">❌ Gestão de Pessoas</li>
                    </ul>
                    <div class="mt-6">
                        <a href="" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Assinar
                        </a>
                    </div>
                </div>
                <!-- Plan 2 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        Profissional
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        Para empresas em crescimento.
                    </p>
                    <p class="mt-4 text-4xl font-bold text-gray-900 dark:text-white">
                        R$ 199/mês
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="text-gray-600 dark:text-gray-300">✔️ Gestão Financeira</li>
                        <li class="text-gray-600 dark:text-gray-300">✔️ Controle de Estoque</li>
                        <li class="text-gray-600 dark:text-gray-300">✔️ Gestão de Pessoas</li>
                    </ul>
                    <div class="mt-6">
                        <a href="" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Assinar
                        </a>
                    </div>
                </div>
                <!-- Plan 3 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        Empresarial
                    </h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">
                        Solução completa para grandes empresas.
                    </p>
                    <p class="mt-4 text-4xl font-bold text-gray-900 dark:text-white">
                        R$ 299/mês
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="text-gray-600 dark:text-gray-300">✔️ Gestão Financeira</li>
                        <li class="text-gray-600 dark:text-gray-300">✔️ Controle de Estoque</li>
                        <li class="text-gray-600 dark:text-gray-300">✔️ Gestão de Pessoas</li>
                        <li class="text-gray-600 dark:text-gray-300">✔️ Suporte Premium</li>
                    </ul>
                    <div class="mt-6">
                        <a href="" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Assinar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} SystemCloud ERP. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>