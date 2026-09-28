<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBook extends Component {
    // php attribute, second.blade.php is the layout manually created
    #[Layout('components.layouts.second')]
    public function render() {
        return view('livewire.create-book')->title('Create Book - Add a Book');
        // ->layout('components.layouts.second') is the same as the #[Layout('components.layouts.second')]
    }
}
