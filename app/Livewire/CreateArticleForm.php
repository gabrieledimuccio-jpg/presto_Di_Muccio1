<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticleForm extends Component
{
#[Validate('required|min:5', message:'Il titolo è obbligatorio')]
public $title;
#[Validate('required|min:10', message:'La descrizione è obbligatoria')]
public $description;
#[Validate('required|numeric', message:'Il prezzo è obbligatorio')]
public $price;
#[Validate('required', message:'La categoria è obbligatoria')]
public $category;
public $article;

public function store(){
    Article::create([
'title'          => $this->title,
'description'    => $this->description,
'price'          => $this->price,
'category_id'    => $this->category,
'user_id'        => Auth::id(),
]);

$this->reset();
session()->flash('success', 'Il tuo articolo è stato pubblicato online');
}

public function save()
{
    $this->validate();
    $this->article = Article::create([
        'title'       => $this->title,
        'description' => $this->description,
        'price'       => $this->price,
        'category_id' => $this->category_id,
        'user_id'     => Auth::id
    ]);
}

public function render()
{
return view('livewire.create-article-form');
}
}
