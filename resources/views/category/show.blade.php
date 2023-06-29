<x-main>
    
    <h1>{{$category['name']}}</h1>

    @forelse ($category->articles as $article)
    <x-card_article :article="$article">
    @empty
        <div>Ciao</div>
    @endforelse
        
    
</x-main>