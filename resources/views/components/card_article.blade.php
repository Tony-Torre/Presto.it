<div class="col">
  <div class="card background_white shadow_color">
    <img src="https://unsplash.it/400" class="card-img-top " alt="immagine">
    <div class="card-body ">
      <h5 class="card-title">{{$article['title']}}</h5>
      <div class="d-flex justify-content-between mb-2">
        <span class="background_blue text-white rounded p-1 ">{{$article->category->name}}</span>
        <span style="color: rgb(0, 167, 0)" class="rounded p-1 ">€{{$article->price}}</span>
      </div>
      @auth
      <a href="{{route('article.edit',['article'=>$article])}}">
        <button class="btn btn_red">Modifica</button>
      </a>
      @endauth 
      <a href="{{route('article.show',['article'=>$article])}}">
        <button class="btn btn_orange">Dettagli</button>
      </a>
    </div>
  </div>
</div>