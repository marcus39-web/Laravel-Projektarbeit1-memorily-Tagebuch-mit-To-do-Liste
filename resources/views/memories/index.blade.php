@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Memories</h1>
        <a href="{{ route('memories.create') }}" class="btn btn-primary mb-3">Neue Memory anlegen</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($memories->isEmpty())
            <p>Keine Memories vorhanden.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Farbe</th>
                        <th>Bild</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($memories as $memory)
                        <tr>
                            <td>{{ $memory->title }}</td>
                            <td>
                                <span style="background: {{ $memory->color ?? '#eee' }}; padding: 0.5em 1em; border-radius: 5px;">
                                    {{ $memory->color ?? 'Standard' }}
                                </span>
                            </td>
                            <td>
                                @if($memory->image_url)
                                    <img src="{{ $memory->image_url }}" alt="Bild" style="max-width: 80px; max-height: 60px; border: 2px solid #444; border-radius: 6px; box-shadow: 2px 2px 0 #888; background: #fff; padding: 2px;">
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('memories.show', $memory) }}" class="btn btn-info btn-sm">Anzeigen</a>
                                <a href="{{ route('memories.edit', $memory) }}" class="btn btn-warning btn-sm">Bearbeiten</a>
                                <form action="{{ route('memories.destroy', $memory) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Wirklich löschen?')">Löschen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
