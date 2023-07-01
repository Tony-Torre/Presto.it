<div>
    <h2>Inserisci il tuo articolo!</h2>
    <form wire:submit.prevent="store">
        @csrf
        @if (session()->has('article'))
        <div class="alert alert-success">
            {{ session('article') }}
        </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" id="title" wire:model="title" placeholder="Titolo" value="{{old('title')}} class="form-control @error('title') is-invalid @enderror">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo </label>
            <input type="number" min="0"step="0.01" id="price" value="{{old('price')}} class="form-control @error('price') is-invalid @enderror" wire:model="price" placeholder="Prezzo 0.00">
            @error('price')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Inserisci una breve descrizione</label>
            <input type="text" id="description" value="{{old('description')}}class="form-control @error('description') is-invalid @enderror" wire:model="description" placeholder="Descrizione">
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoria</label>
            <select wire:model.defer="category_id" id="category_id">
                <option value="" selected>Seleziona la Categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
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
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>