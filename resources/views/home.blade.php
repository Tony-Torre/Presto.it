<x-main>
    
    @if (session()->has('access.denied'))
        <div class="alert alert-danger text-center mt-3">
            {{ session('access.denied') }}
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success text-center mt-3">
            {{ session('message') }}
        </div>
    @endif
    
    <x-form_ricerca />
    
    <x-header />
    
    <section class="w-75 m-auto my-5">
        <div class="row">
            <div class="col-8"><img src="/222211510111-c6b9ddb4-266a-4a23-ac6e-284321398d69.jpg" alt="Telefonia" class="img-fluid"></div>
            <div class="col-4">Telefona chi ti piace</div>
        </div>
    </section>

</x-main>