<div>
    <h2 class="text-center mt-5">Inserisci il tuo articolo!</h2>
    <div class="p-5 container mt-5 shadow_color w-75 text-center">
        <form wire:submit.prevent="store">
            @csrf
            @if (session()->has('article'))
            <div class="alert alert-success">
                {{ session('article') }}
            </div>
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" id="title" wire:model="title" placeholder="Titolo" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo </label>
                <input type="number" min="0"step="0.01" id="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" wire:model="price" placeholder="Prezzo 0.00">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci una breve descrizione</label>
                <input type="text" id="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" wire:model="description" placeholder="Descrizione">
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Categoria</label>
                <select class="form-select mb-3 capitalize" aria-label="Default select example" id="category_id" wire:model="category_id">
                <option selected> Seleziona la categoria </option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" class="capitalize">
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            @error('category_id')
            <span class="text-danger">Scegliere una categoria</span>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="image" class="form-label">Immagine dell'articolo</label>
            <input type="file" id="title" class="form-control" wire:model="image" placeholder="Immagine">
        </div> --}}
        <button type="submit" class="btn btn_orange">Crea</button>
    </form>
</div>
</div>