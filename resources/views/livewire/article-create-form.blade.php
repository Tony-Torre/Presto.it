<div>
    <h1 class="text-center mt-5">Inserisci il tuo articolo!</h1>
    <div class="p-5 container mt-5 shadow_color w-75 text-center">
        <form wire:submit.prevent="store">
            @csrf
            @if (session()->has('article'))
            <div class="alert alert-success">
                {{ session('article') }}
            </div>
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" id="title" wire:model="title" placeholder="Titolo" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" min="0"step="0.01" id="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" wire:model="price" placeholder="Prezzo 0.00">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci una breve descrizione*</label>
                <input type="text" id="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" wire:model="description" placeholder="Descrizione">
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Categoria*</label>
                <select class="form-select mb-3 capitalize @error('category_id') is-invalid @enderror" aria-label="Default select example" id="category_id" wire:model="category_id">
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
            <div class="mb-3">
                <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images') is-invalid @enderror" id="temporary_images" placeholder="Img">
                @error('temporary_images')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Preview delle foto</p>
                    <div class="row">
                        @foreach ($images as $key => $image)
                        <div class="col my-3">
                            <div class="mx-auto rounded img-preview" style="background-image: url({{$image->temporaryUrl()}})"></div>
                            <button type="button" class="btn btn_orange" wire:click="removeImages({{$key}})">Cancella</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <button type="submit" class="btn btn_orange">Crea</button>
        </form>
    </div>
</div>