<x-main> 
    <h1 class="mt-5 text-center"> I miei articoli online</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 mt-5 m-auto">
        @foreach($articles as $article)
        @if ($article->is_accepted===1)
        <x-card_article :$article/>
        <form action="{{ route('article.sell', ['article' => $article]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-danger shadow"> <i class="fa-solid fa-xmark" style="color: #ffffff;"></i> Venduto</button>
        </form>
        @endif 
        @endforeach
    </div>
    <h1 class="mt-5 text-center"> I miei articoli in revisione</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 mt-5 m-auto">
        @foreach($articles as $article)
        @if ($article->is_accepted=== null)
        <x-card_article :$article/>
        @endif 
        @endforeach
    </div>
    <h1 class="mt-5 text-center"> I miei articoli venduti</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 mt-5 m-auto">
        @foreach($articles as $article)
        @if ($article->is_accepted=== 2)
        <x-card_article :$article/>
        @endif 
        @endforeach
    </div>
    <h1 class="mt-5 text-center"> I miei articoli rifiutati</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 mt-5 m-auto">
        @foreach($articles as $article)
        @if ($article->is_accepted===0)
        <x-card_article :$article/>
        @endif 
        @endforeach
    </div>
</x-main>