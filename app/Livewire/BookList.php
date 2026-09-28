<?php
// lesson-7
namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component {
    public function delete(Book $book){
      $book->delete();
    }

    public function render(){
        return view('livewire.book-list', [
          'books' => Book::all()
        ])->title('Books');
    }
}
