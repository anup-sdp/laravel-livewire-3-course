<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBook extends Component {
    public function render(){
        return view('livewire.create-book')->title('Create Book');
    }
}
