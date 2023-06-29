<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title, $price, $description, $category_id, $user_id;

    protected $rules = [
        'title'=> 'required|string|max:225',
        'price'=> 'required|numeric',
        'description'=> 'required|string',
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
            'title.max' => 'Devi inserire una categoria di massimo 255 caratteri',
            'name.min' => 'Devi inserire una categoria di minimo 2 caratteri',
            'name.required' => 'Devi inserire la categoria',
        ];
    }
    public function render()
    {
        return view('livewire.article-create-form');
    }
}
