<x-layout>
    <section class="max-w-4xl mx-auto mt-24 px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Olá, {{ $name }}!</h2>
        <p class="text-lg text-gray-600 leading-relaxed">
            <strong>Laravel Blog</strong>, é uma plataforma dedicada a fornecer as últimas notícias, análises e insights sobre as tendências tecnológicas e financeiras. 
            Nosso objetivo é manter nossos leitores informados sobre o impacto da tecnologia no setor financeiro e como as inovações estão moldando o futuro dos investimentos, bancos e finanças pessoais.
        </p>
    </section>
    <main class="mt-20 container mx-auto px-4">
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Destaque</h2>
            <p class="text-gray-600 mb-4">Confira o artigo mais recente e relevante selecionado especialmente para você.</p>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="{{ asset($featuredArticle->cover) }}" alt="{{ $featuredArticle->title }}" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-xl font-bold mb-2">{{ $featuredArticle->title }}</h3>
                <p class="text-gray-700">{{ $featuredArticle->caption }}</p>
                <a href="{{ route('article.show', $featuredArticle->slug) }}" class="text-blue-700 font-bold mt-2 inline-block">Leia mais →</a>
            </div>
        </section>
        <section>
            <h2 class="text-3xl font-bold mb-4">Últimos artigos</h2>
            <p class="text-gray-600 mb-4">Navegue pelos diversos outros conteúdos publicados no blog.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($articles as $article)
                    @if ($article->id != $featuredArticle->id)
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <img src="{{ asset($article->cover) }}" alt="{{ $article->title }}" class="w-full h-32 object-cover rounded-md mb-4">
                            <h3 class="text-lg font-bold">{{ $article->title }}</h3>
                            <p class="text-gray-700">{{ $article->caption }}</p>
                            <a href="{{ route('article.show', $article->slug) }}" class="text-blue-700 font-bold mt-2 inline-block">Leia mais →</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </main>
</x-layout>