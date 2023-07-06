<div class="footer mt-5">&copy;
    <span id="year">
        @auth
        @if (Auth::user()->is_revisor)
        Lavori già per noi
        @else
        <a href="{{route('become.revisor')}}">Diventa revisore!</a>
        @endif
        @else
        <a href="{{route('become.revisor')}}">Diventa revisore!</a>
        @endauth
        
    </span>
</div>