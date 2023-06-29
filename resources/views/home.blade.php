<x-main>
    
    <form action="{{route('article.search')}}" method="POST" class="mt-5">
        @method('POST')
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-auto">
                    <input type="search" placeholder="Cerca libro" id="search_article" name="search_article">
                </div>
                <div class="mb-3">
                    <label for="search_category" class="form-label">Categoria</label>
                    <select name="search_category" id="search_category">
                        <option value="" selected>Seleziona la Categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-auto">
                    <div class="d-grid gap-3">
                        <button class="btn btn-light btn-sm p-2" type="submit" style='width: 100px; height: 40px; border-color: rgb(27,27,162)'>Ricerca</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
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