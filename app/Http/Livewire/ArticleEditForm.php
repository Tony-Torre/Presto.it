<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{

    public $title, $price, $description, $category_id;
    public Article $article;

    protected $rules = [
        'title'=> 'required|string|max:225|min:5',
        'price'=> 'required|decimal:2',
        'description'=> 'required|string|max:225|min:5',
        'category_id'=> 'integer',
        // 'image'=> 'string',
    ];

    public function mount(){
        $this->title=$this->article->title;
        $this->price=$this->article->price;
        $this->description=$this->article->description;
        $this->category_id=$this->article->category_id;
    }

   // public function updated($propertyName){
   //     $this->validateOnly($propertyName);
   // }

    public function update(){
        $this->validate();
        $this->article->update([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);
        session()->flash('article', 'Articolo modificato con successo');
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
        ];
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
