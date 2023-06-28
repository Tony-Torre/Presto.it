<span>{{$article['title']}}</span>

<div class="card" style="width: 18rem;">
    <img class="card-img-top mb-5 mb-md-0"
                        src="{{empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image)}}"
                        alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article['title']}}</h5>
      <p class="card-text">{{$article['description']}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>