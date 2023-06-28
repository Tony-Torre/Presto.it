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
                    <button class="btn btn-primary btn-lg p-2" type="submit" style='width: 100px; height: 40px;'>Ricerca</button>
                </div>
            </div>
        </div>
    </form>
    <ul>
    @foreach ($articles as $article)
        <li><span>{{$article['title']}} <a href="{{route('article.edit',['article'=>$article])}}"><button>Modifica</button></a> <a href="{{route('article.show',['article'=>$article])}}"><button>Visualizzalo</button></a></span></li>
    @endforeach
    </ul>
</x-main>