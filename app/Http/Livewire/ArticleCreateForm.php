<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title, $price, $description, $category_id, $user_id;

    protected $rules = [
        'title'=> 'required|string|max:225|min:5',
        'price'=> 'required|decimal:2',
        'description'=> 'required|string|max:225|min:5',
        'category_id'=> 'string',
        'user_id'=> '',
        // 'image'=> 'string',
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
            'name.min' => 'Devi inserire una categoria di minimo 2 caratteri',
            'name.required' => 'Devi inserire la categoria',
            'price.decimal' => 'Inserire il prezzo con i centesimi',
            'price.required' => 'Prezzo obbligatorio',
            'description.min' => 'Inserisci almeno 5 caratteri',
            'description.max' => 'Inserisci massimo 255 caratteri',
            'description.required' => 'Descizione obbligatoria',
            'description.string' => 'La descrizione deve essere composta di lettere'
        ];
    }
    public function render()
    {
        return view('livewire.article-create-form');
    }
}
