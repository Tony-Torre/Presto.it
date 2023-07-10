<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreateForm extends Component
{
    use WithFileUploads;

    public $title, $price, $description, $category_id, $user_id, $image;
    public $images = [];
    public $temporary_images;

    protected $rules = [
        'title'=> 'required|string|max:225|min:5',
        'price'=> 'required|decimal:2',
        'description'=> 'required|string|max:225|min:5',
        'category_id'=> 'integer',
        'user_id'=> '',
        'temporary_images'=> 'image|max:3072',
        'images' => 'image|max:3072',
        'image' => 'image|max:3072',
    ];
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    
    public function store(){
        $this->validate();
        Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => Auth::user()->id,
        ]);
        $this->reset(['title','price','description','category_id']);
        session()->flash('article', 'Articolo aggiunto correttamente');
       
    }
    
    public function messages(){
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
            'category_id.integer'=>'Seleziona una categoria',
            'temporary_images.image'=>'Il file deve essere un\'immagine',
            'temporary_images.max'=>'L\'immagine deve essere al massimo di 3 mb'
        ];
    }
    public function render()
    {
        return view('livewire.article-create-form');
    }
}
