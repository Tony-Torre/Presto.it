<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title, $price, $description, $category_id;

    protected $rules = [
        'title'=> 'required|string',
        'price'=> 'required|numeric',
        'description'=> 'required|string',
        'category_id'=> '',
        // 'image'=> 'string',
    ];
    
    public function update($propertyName){
        $this->validateOnly($propertyName);
    }
    
    public function store(){
        $this->validate();
        Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);
        $this->reset(['title','price','description','category_id']);
        session()->flash('article', 'Articolo aggiunto correttamente');
       
    }
    
    public function render()
    {
        return view('livewire.article-create-form');
    }
}
