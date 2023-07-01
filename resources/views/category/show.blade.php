<x-main>
    <h1>{{$category['name']}}</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto " >
        @forelse ($category->articles as $article)
            <x-card_article :article="$article"/>
        @empty
            <p>Al momento non abbiamo aannunci per questa categoria.</p>
        @endforelse
        </div>
</x-main>