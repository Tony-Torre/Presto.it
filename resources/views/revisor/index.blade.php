<x-main>
    <div>
        <h1 class="mt-5 text-center">
            {{ $article_to_check ? "Ecco l'annuncio da revisionare" : 'Non ci sono annunci da revisionare' }}
        </h1>
    </div>
    
    @if ($article_to_check)
    <div class="container background_white rounded p-0 w-75 mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide col-12 col-md-6 mt-5 rounded">
                    <div class="carousel-indicators rounded">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://unsplash.it/600" class="d-block w-100 rounded" alt="Immagine1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://unsplash.it/400" class="d-block w-100 rounded" alt="Immagine2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://unsplash.it/400" class="d-block w-100 rounded" alt="Immagine3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-5">
            
            <h5 class="card-title">Titolo: {{ $article_to_check->title }}</h5>
            <p class="card-text">Descrizione: {{ $article_to_check->body }} </p>
            <p class="card-footer">Pubblicato il: {{ $article_to_check->created_at->format('d/m/Y') }};
            </p>
        </div>
        <div class="col-md-6 mt-5">
            <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow">Accetta</button>
            </form>
            <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
            </form>
            
        </div>
    </div>
    
    @endif
</x-main>
