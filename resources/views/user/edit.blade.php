<x-main>
    <form action="profile.update" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="photo" class="form-label">Inserisci la tua foto</label>
            <input type="file" name="photo" class="form-control" id="photo" value="{{ old('photo') }}"placeholder="Inserisci la tua foto">
            @error('photo')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Inserisci la tua data di nascita</label>
            <input type="date" name="birthday" class="form-control" id="birthday" value="{{ old('birthday') }}"placeholder="Inserisci la tua data di nascita">
            @error('birthday')
            <span class="text-danger">
                {{$message}}
            </span>
            @enderror
        </div>
        <button class="btn btn_orange" type="submit">Modifica profilo</button>
    </form>
</x-main>