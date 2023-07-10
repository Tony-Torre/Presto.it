<div class="footer mt-5">&copy;
    <span id="year">
        @auth
        @if (Auth::user()->is_revisor)
        Lavori già per noi
        @else
        <a href="{{route('revisor.form')}}">Diventa revisore!</a>
        @endif
        @else
        <a href="{{route('revisor.form')}}">Diventa revisore!</a>
        @endauth
        
    </span>
    <ul>
        <li><x-_locale lang="it" nation='it' /></li>
        <li><x-_locale lang="es" nation='es' /></li>
        <li><x-_locale lang="en" nation='gb' /></li>
    </ul>
</div>