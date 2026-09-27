<?php
// lesson-4, Data Binding (2 way binding) & Modifiers
namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component {
    public $name = 'Mario';

    public function delete(Book $book) {
      $book->delete();
    }

    public function render() {
        return view('livewire.book-list', [
          'books' => Book::all()
        ]);
    }
}
