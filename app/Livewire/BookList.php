<?php
// lesson-3
namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component {
    public $name = 'Mario';
    /*
    public $count = 0;
    public function increment($number) {
      $this->count += $number;
    }
    */

    public function delete(Book $book) { // although sending book id from template
      $book->delete();
    } // render() will be called after the delete() to update the UI

    public function render() {
        return view('livewire.book-list', [
          'books' => Book::all()
        ]);
    }
}
