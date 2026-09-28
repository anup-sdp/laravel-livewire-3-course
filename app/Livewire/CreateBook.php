<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBook extends Component{
    public $title;
    public $author;
    public $rating;

    // save through form submit, from create-book.blade.php
    public function save(){
      Book::create([
        'title' => $this->title,
        'author' => $this->author,
        'rating' => $this->rating
      ]);

      $this->redirect('/');
    }

    public function render(){
        return view('livewire.create-book');
    }
}
