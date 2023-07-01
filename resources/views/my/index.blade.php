<x-main> 
    <h1 class="mt-5 text-center"> I miei articoli</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 mt-5 m-auto">
        @foreach($articles as $article)
                <x-card_article :$article/>
        @endforeach
    </div>
</x-main>