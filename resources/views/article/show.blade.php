<x-main>
{{-- <span>{{$article['title']}}</span>

<div class="card" style="width: 18rem;">
    <img class="card-img-top mb-5 mb-md-0"
                        src=""
                        alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article['title']}}</h5>
     <p class="card-text">{{$article['description']}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}

  

  <div class="container">
    <div class="row ">
  <div id="carouselExampleIndicators" class="carousel slide col-12 col-md-6 mt-5 ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://unsplash.it/400" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://unsplash.it/400" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://unsplash.it/400" class="d-block w-100" alt="...">
      </div>
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
  <div class="col-md-6 mt-5" >
    <table class="table border mt-2 col-12 col-md-6">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Categoria</th>
                
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{$article['description']}}</td>
                    <td>{{$article->category->name}}</td>
                    {{-- <tr colspan="4"> </tr> --}}
    </table>
  </div>
</div>



</div>

</x-main>