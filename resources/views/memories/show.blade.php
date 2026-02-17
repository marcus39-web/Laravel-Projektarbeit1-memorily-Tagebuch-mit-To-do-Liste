@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $memory->title }}</h1>
        <div class="mb-3">
            <span style="background: {{ $memory->color ?? '#eee' }}; padding: 0.5em 1em; border-radius: 5px; color: #222;">
                {{ $memory->color ?? 'Standardfarbe' }}
            </span>
        </div>
        <div class="mb-3">
            <strong>Text:</strong>
            <div style="white-space: pre-line;">{{ $memory->text }}</div>
        </div>
        @if($memory->image_url)
            <div class="mb-3">
                <strong>Bild:</strong><br>
                <img src="{{ $memory->image_url }}" alt="Bild" style="max-width: 300px; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 8px #ccc;">
            </div>
        @endif
        <a href="{{ route('memories.edit', $memory) }}" class="btn btn-warning">Bearbeiten</a>
        <a href="{{ route('memories.index') }}" class="btn btn-secondary">Zurück zur Übersicht</a>
    </div>
@endsection
