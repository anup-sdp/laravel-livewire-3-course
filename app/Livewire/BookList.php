<?php
// lesson-6
namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component {
    public $name = 'Mario';

    public function delete(Book $book){
      $book->delete();
    }

    public function render(){
        return view('livewire.book-list', [
          'books' => Book::all()
        ])->title('Book List - Home');
        /*
        can also use Title attribute above the class
          use Livewire\Attributes\Title;
          #[Title('Book List')]
        */
    }
}
