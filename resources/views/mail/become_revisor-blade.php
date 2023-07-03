<x-main>

    <p>Nome: {{$user->name}}</p>
    <span>Email: {{$user->email}}</span>
    <a href="{{route('make.revisor')}}">Accetta come Revisore</a>

</x-main>