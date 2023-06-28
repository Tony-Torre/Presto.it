<x-main>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top mb-5 mb-md-0"
    src=""
    alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article['title']}}</h5>
      <p class="card-text">{{$article['description']}}</p>
      <p class="card-text">{{$article->category->name}}</p>
      <p class="card-text">{{$article->user->name}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</x-main>