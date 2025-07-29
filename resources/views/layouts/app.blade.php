<!DOCTYPE html>
<html lang="en" x-data="{ open: true }" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>VIVERCO</title>
</head>

<body class="h-screen overflow-hidden">

    <div class="flex h-full">
        <!-- Sidebar -->
        <nav :class="open ? 'w-64' : 'w-16'" class="bg-zinc-900 transition-all duration-300 flex flex-col p-4 space-y-4">
            <!-- Botón toggle -->
            <button @click="open = !open" class="text-white self-end mb-4 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="w-5 h-5">
                    <path :class="{ 'hidden': open, 'inline': !open }" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M9 5l7 7-7 7" />
                    <path :class="{ 'hidden': !open, 'inline': open }" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Usuario -->
            <div x-show="open" class="flex items-center space-x-4 bg-zinc-800 rounded-md p-3">
                <div class="h-10 w-10 bg-zinc-700 text-white rounded-full flex items-center justify-center">US</div>
                <div class="text-white">
                    <p>Usuario</p>
                    <p class="text-xs">usuario@viverco.com</p>
                </div>
            </div>

            <!-- Navegación -->
            <div class="flex flex-col space-y-2">
                <a href="/"
                    class="text-sm text-white px-2 py-2 hover:bg-zinc-800 rounded-md flex items-center space-x-2">
                    <x-heroicon-o-squares-2x2 class="w-5 h-5" />
                    <span x-show="open">Dashboard</span>
                </a>
                <a href="/users"
                    class="text-sm text-white px-2 py-2 hover:bg-zinc-800 rounded-md flex items-center space-x-2">
                    <x-heroicon-o-user class="w-5 h-5" />
                    <span x-show="open">Usuarios</span>
                </a>
            </div>
        </nav>

        <!-- Contenido -->
        <main class="flex-1 overflow-y-auto bg-zinc-100  w-full">

            
            <nav class="flex bg-white w-full shadow z-30 p-4 " aria-label="Breadcrumb">
                @include('components.breadcum')

            </nav>
        
            @yield('content')
        </main>
    </div>

</body>

</html>
