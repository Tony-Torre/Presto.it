<x-main>
  
  <div class="container rounded p-0 w-75 mt-5">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide col-12 col-md-6 mt-5 rounded">
        <div class="carousel-indicators rounded">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://unsplash.it/600" class="d-block w-100 rounded" alt="Immagine1">
          </div>
          @foreach ($article->images as $image)
          <div class="carousel-item">
            
            <img src="{{Storage::url($image->path)}}" class="d-block w-100 rounded" alt="Immagine3">
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="col-md-6 mt-5 d-flex flex-column align-items-around justify-content-around">
        <div>
          <span class="background_blue rounded p-1 text-white">{{$article->category->name}}</span>
        </div>
        <h3 class="mt-5">{{$article->title}}</h3>
        <span>{{$article->description}}</span>
        <h2 style="color: rgb(0, 167, 0)">€{{$article->price}}</h2>
        <hr class="w-75">
        <h6>Creato il {{$article->created_at->format('d/m/Y')}}, dall'utente {{$article->user->name}}</h6>
      </div>
    </div>
  </div>
  
</x-main>