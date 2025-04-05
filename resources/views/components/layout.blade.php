<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Blog</title>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <style>
            #menu-toggle:checked ~ #sidebar {
                transform: translateX(0);
            }
        </style>
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-900 font-serif">
        <input type="checkbox" id="menu-toggle" class="hidden">
        <header class="bg-black text-white py-4 shadow-md fixed w-full top-0 z-20 flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold"><a href="{{ route('blog') }}">Laravel Blog</a></h1>
            <label for="menu-toggle" class="cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </label>
        </header>
        <aside class="fixed top-0 right-0 w-1/2 h-full bg-white shadow-lg transform translate-x-full transition-transform ease-in-out duration-300 z-30 p-6" id="sidebar">
            <label for="menu-toggle" class="absolute top-4 right-4 cursor-pointer">✖</label>
            <nav class="mt-16">
                <ul class="space-y-4 text-lg">
                    @auth
                        <li class="border-b border-gray-300 pb-2">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="block w-full text-left text-red-600 hover:underline">
                                    Sair
                                </button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="border-b border-gray-300 pb-2">
                            <a href="{{ route('login') }}" class="block hover:underline">Login</a>
                        </li>
                    @endguest
                    <li class="border-b border-gray-300 pb-2">
                        <a href="{{ route('about') }}" class="block hover:underline">Sobre</a>
                    </li>
                    @auth
                        @if (Auth::user()->email === 'admin@blog.com')
                            <li class="border-b border-gray-300 pb-2">
                                <a href="{{ route('publish') }}" class="block hover:underline">Publicar</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </nav>
        </aside>
        {{ $slot }}
        <footer class="bg-black text-white text-center py-4 mt-10">
            <p>&copy; 2025 Laravel Blog. Todos os direitos reservados.</p>
        </footer>
    </body>
</html>