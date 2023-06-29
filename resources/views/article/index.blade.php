<x-main>
    <h1 class="text-center">I nostri articoli</h1>
    <ul>

    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto ">
    @foreach ($articles as $article)
        <div class="col">
            <div class="card ">
              <img src="..." class="card-img-top " alt="...">
              <div class="card-body ">
                <h5 class="card-title">{{$article['title']}}</h5>
                <p class="card-text">Descrizione:{{$article['description']}}</p>
                <p class="card-text">Categoria:{{$article->category->name}}</p>
                @auth
                  <a href="{{route('article.edit',['article'=>$article])}}"><button class="btn btn-light">Modifica</button></a>
                @endauth 
                <a href="{{route('article.show',['article'=>$article])}}"><button class="btn btn-light">Dettagli</button></a>
              </div>
            </div>
          </div>

    
    @endforeach
    </div>
</x-main>