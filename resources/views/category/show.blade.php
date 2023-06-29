<x-main>
    
    <h1>{{$category['name']}}</h1>

    @forelse ($category->articles as $article)
        <div>ciao</div>
    @empty
        <div>ciao</div>
    @endforelse
        
    
</x-main>