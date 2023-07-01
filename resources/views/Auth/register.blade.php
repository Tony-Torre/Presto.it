<x-main>
    <h1 class="text-center mt-5">Registrati</h1>
    <div class="p-5 container mt-5 shadow_color w-75 text-center">
        <form action="{{route('register')}}" method="POST">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                <span class="text-danger">
                    Username obbligatorio!
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                @error('email')
                <span class="text-danger">
                    Email obbligatoria!
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
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn_orange">Registrati</button>
        </form>
        <p>Hai già un account? 
            <a href="{{route('login')}}">Accedi qui</a>
        </p>
    </div>
</x-main>
