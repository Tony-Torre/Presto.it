<x-main>
    <h1 class="text-center m-5">I nostri articoli</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto " >
        
    @forelse ($articles as $article)
    
        <x-card_article :article="$article"/>
    @empty
    <h3>Non ci sono articoli</h3>
    @endforelse
    </div>
</x-main>