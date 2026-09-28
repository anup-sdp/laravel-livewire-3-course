<div>
  <livewire:page-header subtitle="Here's a list of your books...">

  {{-- search --}}
  <input 
    type="text" 
    wire:model.live.debounce.300ms="term"
    placeholder="Search for books..."
    class="search"
  >
  <!-- 
      What the binding does:
    wire:model="term" keeps the input value in sync with $this->term.
    .live sends updates to the server as the user types (not only on submit).
    .debounce.300ms waits 300ms after typing stops before sending, so you are not querying on every keystroke.
  -->

  <ul class="list">
    @foreach($books as $book)
      <li wire:key="{{ $book->id }}">
        <button 
          wire:click="delete({{ $book->id }})">
          Delete
        </button>
        <h3>{{ $book->title }}</h3>
        <h4>{{ $book->author }}</h4>
        <p>Rating: {{ $book->rating }}/10</p>
      </li>
    @endforeach
  </ul>
</div>
