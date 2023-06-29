<x-main>
    <h1 class="text-center">I nostri articoli</h1>
    <ul>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto">
    @foreach ($articles as $article)
        <x-card_article :article="$article" />
    @endforeach
    </div>
</x-main>