<div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$article['title']}}</h5>
        <p class="card-text">Descrizione:{{$article['description']}}</p>
        <p class="card-text">Categoria:{{$article->category->name}}</p>
        @auth
          <a href="{{route('article.edit',['article'=>$article])}}"><button>Modifica</button></a>
        @endauth 
        <a href="{{route('article.show',['article'=>$article])}}"><button>Dettagli</button></a>
      </div>
    </div>
  </div>