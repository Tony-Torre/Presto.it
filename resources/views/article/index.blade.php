<x-main>
    <h1>I nostri articoli</h1>
    <ul>
    @foreach ($articles as $article)
        <li><span>{{$article['title']}} <a href="{{route('article.edit',['article'=>$article])}}"><button>Modifica</button></a> <a href="{{route('article.show',['article'=>$article])}}"><button>Visualizzalo</button></a></span></li>
        
    @endforeach
    </ul>
</x-main>