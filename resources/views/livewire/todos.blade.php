<div>
    <form wire:submit='add'>
        <input wire:model.blur="todo" type="text">
        <p>The current todo: {{ $todo }}</p>
        <button typ="submit">Add</button>
    </form>
    <hr>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
