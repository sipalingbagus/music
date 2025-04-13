@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('content')
<div class="container">
    <h1>{{ $song->title }}</h1>
    <p><strong>Artis:</strong> {{ $song->artist }}</p>
    <p><strong>Album:</strong> {{ $song->album }}</p>
    <img src="{{ $song->cover_image }}" alt="{{ $song->title }}" style="max-width: 200px;">
    <audio controls>
        <source src="{{ $song->audio_preview_url }}" type="audio/mpeg">
        Browser Anda tidak mendukung audio player.
    </audio>
    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">Kembali ke Dashboard</a>
</div>
@endsection
