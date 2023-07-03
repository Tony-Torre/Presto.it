<x-main>
    
    @if (session()->has('access.denied'))
        <div class="alert alert-danger text-center mt-3">
            {{ session('access.denied') }}
        </div>
    @endif
    
    <x-form_ricerca />
    
    <x-header />
    
</x-main>