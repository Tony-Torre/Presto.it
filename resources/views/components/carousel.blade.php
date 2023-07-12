<div id="carouselExampleIndicators" class="carousel slide col-12 col-md-6 mt-5 rounded">
    <div class="carousel-indicators rounded">
      @if (!$article->images->isEmpty())
      @foreach ($article->images as $image)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}" class="@if ($loop->first) active @endif" aria-current="true" aria-label="Slide 1"></button>  
      @endforeach
      @endif
    </div>
    <div class="carousel-inner">
      @if (!$article->images->isEmpty())
      @foreach ($article->images as $image)
      <div class="carousel-item @if ($loop->first) active @endif">
        <img src="{{Storage::url($image->path)}}" class="d-block w-100 rounded" alt="Immagine3">
      </div>  
      @endforeach
      @else
      
      <div class="carousel-item active">
        <img src="\img\no-image.jpg" class="d-block w-100 rounded" alt="Immagine3">
      </div>
      @endif
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