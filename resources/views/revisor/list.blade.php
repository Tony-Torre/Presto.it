<x-main>
    <h1 class="text-center mt-5">Lista di tutti gli articoli</h1>
    <ul class="mt-5 list-group">
        @forelse ($articles as $article)
        <li class="list-group-item">{{$article->title}}</li>
        @empty
        <li> Non abbiamo Articoli </li>
        @endforelse
    </ul>
</x-main>