<x-main>


    @auth
        
    
        <div class="container">
            <div class="row  ">
                <div class="col-mb-6 d-flex justify-content-center mt-5 ">
                    <button class="btn btn-light">
                        <a href="{{route('article.create')}}">Inserisci annuncio</a>
                    </button>
                </div>
            </div>

    <div class="container">
        <div class="row  ">
            <div class="col-mb-6 d-flex justify-content-center mt-5 ">
                <button class="btn btn-light">
                    <a href="{{ route('category.create') }}">Crea una categoria</a>
                </button>
            </div>
        </div>
    </div>
    @endauth
</x-main>