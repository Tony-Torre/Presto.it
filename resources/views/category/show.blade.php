<x-main>
    <h1 class="text-center mt-5">{{$category['name']}}</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto mt-3" >
        @forelse ($category->articles as $article)
        <x-card_article :article="$article"/>
        @empty
        <div class="text-center m-auto mt-3">
            <div>Al momento non abbiamo annunci per questa categoria.</div>
            <div><button class="btn btn_orange" href="{{route('article.create')}}">Crea tu il primo</button></div>
        </div>
        @endforelse
    </div>
</x-main>