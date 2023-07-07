<div class="text-center">
    <h1>Nuova richiesta</h1>
    <p>L'utente {{$user->name}} {{$user->surname}} - {{$user->phone}}con email {{$user->email}}, ha richiesto di diventare un Revisor di Presto.it</p>
    <a href="{{route('revisor.make',compact('user'))}}">Accetta come Revisore</a>   
</div>