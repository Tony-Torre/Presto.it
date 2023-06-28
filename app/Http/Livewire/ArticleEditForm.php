<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{

    public $title, $price, $description, $category;
    public Article $article;

    protected $rules = [
        'title'=> 'required|string',
        'price'=> 'required|numeric',
        'description'=> 'required|string',
        'category'=> '',
        // 'image'=> 'string',
    ];

    public function mount(){
        $this->title=$this->article->title;
        $this->price=$this->article->price;
        $this->description=$this->article->description;
        $this->category=$this->article->category;
    }

    public function update(){
        $this->validate();
        $this->article->update([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category' => $this->category="",
        ]);
        session()->flash('article', 'Articolo modificato con successo');
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
