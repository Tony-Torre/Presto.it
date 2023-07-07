<x-main>
    <div class="p-5 container mt-5 shadow_color w-75 text-center">
        <form action="{{route('revisor.become')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" placeholder="Nome" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Cognome</label>
                <input type="text" id="surname" value="{{old('surname')}}" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Cognome">
                @error('surname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Parlaci di te</label>
                <input type="text" id="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Descriviti">
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Inserisci la tua email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Numero di telefono</label>
                <input type="number" id="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Inserisci il tuo numero di telefono">
                @error('phone')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn_orange">Invia candidatura</button>
        </form>
    </div>
</x-main>