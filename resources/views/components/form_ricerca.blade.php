<form action="{{route('article.search')}}" method="POST" class="mt-5 position_sticky">
    @method('POST')
    @csrf
    <div class="container w-50 m-auto background_white p-3 rounded background_blue">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="col-12 text-center">
                    <label for="search_article" class="form-label text-center">Cosa cerchi?</label>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <input type="search" placeholder="Telefono, Auto, Libro" id="search_article" name="search_article" class="rounded">
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="col-12 text-center">
                    <label for="search_category" class="form-label">Categoria</label>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <select name="search_category" id="search_category" class="rounded">
                        <option value="" selected>Tutte le categorie</option>
                        @foreach ($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-12 d-flex align-items-center justify-content-center">
                    <button class="btn btn-light btn-sm p-2" type="submit" style='width: 100px; height: 40px; border-color: rgb(27,27,162)'>Ricerca</button>
            </div>
        </div>
    </div>
</form>