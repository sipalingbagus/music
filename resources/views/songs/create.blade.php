@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add a New Song</h2>
    <form action="{{ route('songs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Song Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="artist" class="form-label">Artist</label>
            <input type="text" class="form-control" id="artist" name="artist" required>
        </div>
        <div class="mb-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control" id="album" name="album">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Album Cover (Optional)</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="mp3_file" class="form-label">MP3 File</label>
            <input type="file" class="form-control" id="mp3_file" name="mp3_file" accept=".mp3" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Song</button>
    </form>
</div>
@endsection
