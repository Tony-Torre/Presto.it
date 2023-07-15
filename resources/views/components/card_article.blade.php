<div class="col">
  <div class="card background_white shadow_color">
    
    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400, 300) : '\img\no-image.jpg'}}" class="card-img-top " alt="immagine">
    <div class="card-body ">
      <h5 class="card-title">{{$article['title']}}</h5>
      <div class="d-flex justify-content-between mb-2">
        <span class="background_blue text-white rounded p-1 ">{{$article->category->name}}</span>
        <span style="color: rgb(0, 167, 0)" class="rounded p-1 ">€{{$article->price}}</span>
      </div>
      <div class="d-flex justify-content-between">
        <div>
          <a href="{{route('article.show',['article'=>$article])}}">
            <button class="btn btn_orange">Dettagli</button>
          </a>
          @if (Auth::user()==$article->user && $article->is_accepted!== 2)
          <a href="{{route('article.edit',['article'=>$article])}}">
            <button class="btn btn_red">{{__('ui.modifica')}}</button>
          </a>
          @endif
        </div>
        <div class="d-flex">
          @if ($article->is_accepted === 1)
          <form action="{{ route('article.sell', ['article' => $article]) }}" method="POST" class="me-1">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn_green"><i class="fa-solid fa-sack-dollar"></i></button>
          </form>
          @endif
          @if (Auth::user()==$article->user && $article->is_accepted!== 2)
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#{{"model_" . $article->id}}">
            <i class="fa-solid fa-trash" style="color: #222b39;"></i>
          </button>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="{{"model_" . $article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi veramente eliminare l'annuncio {{$article->title}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('article.destroy', ['article'=>$article])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>


