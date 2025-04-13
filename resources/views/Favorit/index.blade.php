@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">🎵 Lagu Favorit Anda</h1>
    
    <div class="row">
        @foreach ($favorites as $favorite)
        <div class="col-md-4">
            <div class="card text-white bg-dark mb-4" style="border-radius: 20px;">
                <img src="{{ asset('storage/' . $favorite['cover_image']) }}" class="card-img-top" alt="{{ $favorite['title'] }}" style="border-top-left-radius: 20px; border-top-right-radius: 20px; height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $favorite['title'] }}</h5>
                    <p class="card-text">Artis: {{ $favorite['artist'] }}</p>
                    <audio controls class="w-100">
                        <source src="{{ asset('storage/' . $favorite['file_path']) }}" type="audio/mpeg">
                        Browser Anda tidak mendukung audio player.
                    </audio>
                    <div class="mt-3 d-flex justify-content-between">
                        <button class="btn btn-primary">Dengarkan</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
