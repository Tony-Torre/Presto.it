<div class="text-center">
    <h1>Nuova richiesta</h1>
    <p>L'utente {{$user->name}} con email {{$user->mail}}, ha richiesto di diventare un Revisor di Presto.it</p>
    <a href="{{route('make.revisor',compact('user'))}}">Accetta come Revisore</a>   
</div>