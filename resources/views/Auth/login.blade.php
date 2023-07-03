<x-main>
    <h1 class="text-center mt-5 ">Accedi</h1>
    <div class="p-5 container mt-5 shadow_color w-75 text-center">
        <form class="p-5 shadow" action="{{ route('login') }}" method="POST">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email utente</label>
                <input type="email" name="email" class="form-control" id="email" required placeholder="Inserisci la tua Email">
                @error('email')
                <span class="text-danger">
                    Email obbligatorio!
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')
                <span class="text-danger">
                    Password obbligatoria!
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn_orange">Accedi</button>
        </form>
        <div class="my-3">
            <span>OPPURE</span>
        </div>
        <a href="{{ route('socialite.login') }}" class="btn btn-dark"><span>Accedi con GitHub</span> <i class="fa-brands fa-github"></i></a>
        <p>Non hai ancora un account? 
            <a href="{{route('register')}}">Registrati qui</a>
        </p>
    </div>
</x-main>