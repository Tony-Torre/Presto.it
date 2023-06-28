<x-main>
    <h1 class="text-center">I nostri articoli</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto">
    @foreach ($articles as $article)
        <div class="col">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$article['title']}}</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="{{route('article.edit',['article'=>$article])}}"><button>Modifica</button></a> <a href="{{route('article.show',['article'=>$article])}}"><button>Visualizzalo</button></a>
              </div>
            </div>
          </div>
    @endforeach
    </div>
</x-main>