@if (session()->has('article'))
<div class="alert alert-success text-center mt-3">
    {{ session('article') }}
</div>
@endif
<div class="container rounded p-0 w-75 mt-5">
    <div class="row">
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
                    <img src="{{$image->getUrl(400, 300)}}" class="d-block w-100 rounded" alt="Immagine3">
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
        <div class="col-md-6 mt-5 d-flex flex-column align-items-around justify-content-around">
            <div>
                <span class="background_blue rounded p-1 text-white">{{$article->category->name}}</span>
            </div>
            <h3 class="mt-5">{{ $article->title }}</h3>
            <span>{{ $article->description }}</span>
            <h2 style="color: rgb(0, 167, 0)">€{{$article->price}}</h2>
            <hr class="w-75">
            <h6>Creato il {{$article->created_at->format('d/m/Y')}}, dall'utente {{$article->user->name}}</h6>            
        </div>
    </div>
</div>