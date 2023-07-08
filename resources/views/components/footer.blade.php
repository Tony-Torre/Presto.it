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
</div>