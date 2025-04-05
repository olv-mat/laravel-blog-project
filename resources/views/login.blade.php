<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Blog - Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-900 font-serif">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold text-center text-black mb-6">Laravel Blog</h2>
                <form method="post" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">E-mail</label>
                        <input type="text" id="email" name="email" autocomplete="off" class="w-full px-4 py-2 border border-gray-300 rounded-md" required placeholder="Digite seu e-mail">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700">Senha</label>
                        <input type="password" id="password" name="password" autocomplete="off" class="w-full px-4 py-2 border border-gray-300 rounded-md" required placeholder="Digite sua senha">
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-black text-white py-2 rounded-md font-semibold">Entrar</button>
                    </div>
                </form>
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-700">Ainda não tem uma conta? <a href="{{ route('register') }}" class="text-blue-700 font-semibold hover:underline">Registre-se</a></p>
                </div>
            </div>
        </div>
    </body>
</html>