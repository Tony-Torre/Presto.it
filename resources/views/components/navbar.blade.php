<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">  
        <a class="navbar-brand" href="#"><img src="Presto.it.jpg" alt=""
            height="40rem"></a>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Presto.it</a>  
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Annunci
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="{{ route('article.create') }}">Crea un annncio</a></li>
                            <li><a class="dropdown-item " href="{{ route('article.index') }}">Elenco annunci</a></li>
                        </ul>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Annunci</a>
                        </li>
                    </li>
                @endauth   
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            @auth
                <li class="nav-item dropdown" style="list-style-type: none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profilo</a></li>
                        <li><a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        </li>
                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf
                        </form>
                    </ul>
                </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Categorie</a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item " href="{{ route('category.show', ['category'=>$category->id]) }}">{{$category['name']}}</a></li>
                    @endforeach
                </ul>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Annunci</a>
                </li>
            </li>   
        </ul>
    </div>
    
    <div class="d-flex justify-content-end">
        @auth
        <li class="nav-item dropdown" style="list-style-type: none">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Benvenuto {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class="dropdown-item" href="#"
                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf
            </form>
        </ul>
    </li>
    @else
    <li class="nav-item dropdown " style="list-style-type: none">
        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        Utente non loggato
    </a>
    <ul class="dropdown-menu ul ">
        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
        <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
    </ul>
    </li>
    @endauth
    </div>

</nav>
