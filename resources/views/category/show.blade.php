<x-main>
    
    <h1>{{$category['name']}}</h1>

    @forelse ($category->articles as $article)
        {{$article['title']}}
    @empty
        <div>ciao</div>
    @endforelse
        
    
</x-main>