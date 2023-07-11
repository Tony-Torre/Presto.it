<div class="col">
  <div class="card background_white shadow_color">
    <img src="{{!$article->images()->get()->isEmpty() ? Storage::url($article->images()->first()->path) : '\img\no-image.jpg'}}" class="card-img-top " alt="immagine">
    <div class="card-body ">
      <h5 class="card-title">{{$article['title']}}</h5>
      <div class="d-flex justify-content-between mb-2">
        <span class="background_blue text-white rounded p-1 ">{{$article->category->name}}</span>
        <span style="color: rgb(0, 167, 0)" class="rounded p-1 ">€{{$article->price}}</span>
      </div>
      @if (Auth::user()==$article->user)
      <a href="{{route('article.edit',['article'=>$article])}}">
        <button class="btn btn_red">Modifica</button>
      </a>
      @endif
      <a href="{{route('article.show',['article'=>$article])}}">
        <button class="btn btn_orange">Dettagli</button>
      </a>
    </div>
  </div>
</div>