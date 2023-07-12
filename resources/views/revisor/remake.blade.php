<x-main>
    <div>
        <h1 class="mt-5 text-center">
            {{ $article_to_check ? "Ecco l'ultimo annuncio revisionato" : 'Non ci sono annunci da revisionare' }}
        </h1>
    </div>
    @if (session()->has('message'))
    <h5 class="alert alert-success w-25 mt-3 m-auto text-center">
        {{ session('message') }}
    </h5>
    @endif
    @if ($article_to_check)
    <div class="container rounded p-0 w-75 mt-5">
        <div class="row">
            <x-carousel :article="$article_to_check" />
            <div class="col-md-6 mt-5 d-flex flex-column align-items-around justify-content-around">
                <div>
                    <span class="background_blue rounded p-1 text-white">{{$article_to_check->category->name}}</span>
                </div>
                <h3 class="mt-5">{{ $article_to_check->title }}</h3>
                <span>{{ $article_to_check->description }}</span>
                <h2 style="color: rgb(0, 167, 0)">€{{$article_to_check->price}}</h2>
                <hr class="w-75">
                <h6>Creato il {{$article_to_check->created_at->format('d/m/Y')}}, dall'utente {{$article_to_check->user->name}}</h6>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5 d-flex align-item-center justify-content-center">
                <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow"> <i class="fa-solid fa-check" style="color: #ffffff;"></i> Accetta</button>
                </form>
            </div>
            <div class="col-md-4 mt-5 d-flex align-item-center justify-content-center">
                <form action="{{ route('revisor.null_article', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-secondary shadow"> <i class="fa-solid fa-pause" style="color: #ffffff;"></i> Sospendi</button>
                </form>
            </div>
            <div class="col-md-4 mt-5 d-flex align-item-center justify-content-center">
                <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow"> <i class="fa-solid fa-xmark" style="color: #ffffff;"></i> Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-main>
