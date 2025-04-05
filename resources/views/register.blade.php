<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Blog - Cadastro</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-900 font-serif">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold text-center text-black mb-6">Laravel Blog</h2>
                <form method="post" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700">Nome</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md" autocomplete="off" placeholder="Crie seu nome de usuário" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">E-mail</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" autocomplete="off" placeholder="Digite seu e-mail" required >
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700">Senha</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" autocomplete="off" placeholder="Digite sua senha" required >
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-black text-white py-2 rounded-md font-semibold">Cadastrar</button>
                    </div>
                </form>
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-700">Já tem uma conta? <a href="{{ route('login') }}" class="text-blue-700 font-semibold hover:underline">Entrar</a></p>
                </div>
            </div>
        </div>
    </body>
</html>