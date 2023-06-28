<x-main>
    <h1>I nostri articoli</h1>
    <form action="{{route('article_serch')}}" method="POST">
        @method('POST')
        @csrf
        <div class="row">
            <div class="col-md-auto autocomplete">
                <input type="search" placeholder="Cerca libro" id="article_serch" name="article_serch">
            </div>
            <div class="col-md-auto">
                <div class="d-grid gap-3">
                    <button class="btn btn-light btn-sm p-2" type="submit" style='width: 100px; height: 40px; border-color: rgb(27,27,162)'>Ricerca</button>
                </div>
            </div>
        </div>
    </form>
    <ul>
    @foreach ($articles as $article)
        <li><span>{{$article['title']}} <a href="{{route('article.edit',['article'=>$article])}}"><button class="btn btn-light btn-sm" style="border-color: rgb(27,27,162)">Modifica</button></a> <a href="{{route('article.show',['article'=>$article])}}"><button class="btn btn-light btn-sm" style="border-color: rgb(27,27,162)">Visualizzalo</button></a></span></li>
        
    @endforeach
    </ul>
</x-main>