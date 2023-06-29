<x-main>
    <h1 class="text-center">I nostri articoli</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-75 m-auto " >
    @foreach ($articles as $article)
        <div class="col">
            <div class="card background_white">
              <img src="https://unsplash.it/400" class="card-img-top " alt="immagine">
              <div class="card-body ">
                <h5 class="card-title">{{$article['title']}}</h5>
                <p class="card-text">{{$article['description']}}</p>
                <div class="d-flex justify-content-between mb-2">
                  <span class="background_blue rounded p-1 ">{{$article->category->name}}</span>
                  <span style="color: rgb(0, 167, 0)" class="rounded p-1 ">€{{$article->price}}</span>
                </div>
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