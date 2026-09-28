<?php
// lesson-12, Adding a Live Search
namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component {
    public $term = '';  // search query for the book list

    public function delete(Book $book){
      $book->delete();
    }

    public function render(){
        if ($this->term) {
          return view('livewire.book-list', [
            'books' => Book::where('title', 'LIKE', "%{$this->term}%")->get(),
          ])->title('Books');
        }
       
        return view('livewire.book-list', [
          'books' => Book::all()
        ])->title('Books');
    }
}
