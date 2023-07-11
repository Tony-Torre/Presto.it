<?php

namespace App\Http\Livewire;

use App\Jobs\ResizeImage;
use App\Models\Article;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreateForm extends Component
{
    use WithFileUploads;

    public $title, $price, $description, $category_id, $user_id;
    public $images = [];
    public $temporary_images;
    public $article;

    protected $rules = [
        'title' => 'required|string|max:225|min:5',
        'price' => 'required|decimal:2',
        'description' => 'required|string|max:225|min:5',
        'category_id' => 'integer',
        'user_id' => '',
        'temporary_images.*' => 'image|max:3072',
        'images.*' => 'image|max:3072',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:3072',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImages($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();
        $article = Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => Auth::user()->id,
        ]);
        if (count($this->images)) {
            foreach ($this->images as $image) {
                // $article->images()->create(['path' => $image->store('image', 'public')]);


                $this->reset(['title', 'price', 'description', 'category_id', 'images', 'temporary_images']);
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->articles->images()->create(['path' => $image->store('$newFileName')]);

                dispatch(new ResizeImage($newImage->path , 400 , 300));
                session()->flash('article', 'Articolo aggiunto correttamente');
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
    }

    public function messages()
    {
        return [
            'title.max' => 'Inserisci massimo 255 caratteri',
            'title.min' => 'Inserisci almeno 5 caratteri',
            'title.required' => 'Nome articolo obbligatorio',
            'price.decimal' => 'Inserire il prezzo con i centesimi',
            'price.required' => 'Prezzo obbligatorio',
            'description.min' => 'Inserisci almeno 5 caratteri',
            'description.max' => 'Inserisci massimo 255 caratteri',
            'description.required' => 'Descizione obbligatoria',
            'description.string' => 'La descrizione deve essere composta di lettere',
            'category_id.integer' => 'Seleziona una categoria',
            'temporary_images.image' => 'Il file deve essere un\'immagine',
            'temporary_images.max' => 'L\'immagine deve essere al massimo di 3 mb'
        ];
    }
    public function render()
    {
        return view('livewire.article-create-form');
    }
}
