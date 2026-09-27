<?php
// lesson-5, Page Components
// using the component as a whole page

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;

class BookList extends Component {
    public $name = 'Mario';

    public function delete(Book $book) {
      $book->delete();
    }

    #[Title('Book List - Home')]
    public function render() {
        return view('livewire.book-list', [
          'books' => Book::all()
        ]);
    }
}
