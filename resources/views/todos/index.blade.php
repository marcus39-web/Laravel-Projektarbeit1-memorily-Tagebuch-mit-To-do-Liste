@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>To-Do-Liste</h1>
        <form action="{{ route('todos.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="input-group">
                <input type="text" name="text" class="form-control" placeholder="Neues To-Do..." required>
                <button class="btn btn-primary" type="submit">Hinzufügen</button>
            </div>
            @error('text')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </form>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($todos->isEmpty())
            <p>Keine To-Dos vorhanden.</p>
        @else
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <form action="{{ route('todos.update', $todo) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-sm {{ $todo->is_done ? 'btn-success' : 'btn-outline-secondary' }} me-2">
                                {{ $todo->is_done ? 'Erledigt' : 'Offen' }}
                            </button>
                        </form>
                        <span class="flex-grow-1 {{ $todo->is_done ? 'text-decoration-line-through text-muted' : '' }}">
                            {{ $todo->text }}
                        </span>
                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Wirklich löschen?')">Löschen</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
        <a href="{{ route('memories.index') }}" class="btn btn-secondary mt-4">Zurück zu Memories</a>
    </div>
@endsection
