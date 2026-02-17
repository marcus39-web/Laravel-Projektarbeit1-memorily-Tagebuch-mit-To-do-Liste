@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Memory bearbeiten</h1>
        <form action="{{ route('memories.update', $memory) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $memory->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea name="text" id="text" class="form-control" rows="4" required>{{ old('text', $memory->text) }}</textarea>
                @error('text')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Farbe (optional, z.B. #ffcc00 oder red)</label>
                <input type="text" name="color" id="color" class="form-control" value="{{ old('color', $memory->color) }}">
                @error('color')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Bild-URL (optional)</label>
                <input type="text" name="image_url" id="image_url" class="form-control" value="{{ old('image_url', $memory->image_url) }}">
                @error('image_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Aktualisieren</button>
            <a href="{{ route('memories.index') }}" class="btn btn-secondary">Zurück</a>
        </form>
    </div>
@endsection
