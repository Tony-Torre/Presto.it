<x-main>

    <x-form_ricerca />

    <x-header />

    @auth
    <div class="container">
        <div class="row  ">
            <div class="col-mb-6 d-flex justify-content-center mt-5 ">
                <button class="btn btn-light">
                    <a href="{{route('article.create')}}">Inserisci annuncio</a>
                </button>
            </div>
        </div>
    </div>
        @endauth
    </x-main>