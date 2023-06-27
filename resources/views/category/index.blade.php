<x-main>
@if (session('success')) 
    Salvato correttamente
@endif
<div class="d-grid gap-3">
    <button class="btn btn-primary btn-lg p-2">
        <a class="nav-link" href="{{ route('category.create') }}">Inserisci una nuova categoria</a>
    </button>
</div>
<div class="container text-center">
    <div class="row">

Ciao sono le cateogrie

    </div>
</div>

</x-main>