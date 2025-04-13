@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">🎶 Preferensi Musik Anda</h1>
    
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-white bg-dark">
                <img src="{{ asset('images/album1.jpg') }}" class="card-img-top" alt="Album 1">
                <div class="card-body">
                    <h5 class="card-title">Album Favorit 1</h5>
                    <p class="card-text">Deskripsi singkat tentang album ini.</p>
                    <button class="btn btn-primary w-100">Dengarkan Sekarang</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-dark">
                <img src="{{ asset('images/album2.jpg') }}" class="card-img-top" alt="Album 2">
                <div class="card-body">
                    <h5 class="card-title">Album Favorit 2</h5>
                    <p class="card-text">Deskripsi singkat tentang album ini.</p>
                    <button class="btn btn-primary w-100">Dengarkan Sekarang</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-dark">
                <img src="{{ asset('images/album3.jpg') }}" class="card-img-top" alt="Album 3">
                <div class="card-body">
                    <h5 class="card-title">Album Favorit 3</h5>
                    <p class="card-text">Deskripsi singkat tentang album ini.</p>
                    <button class="btn btn-primary w-100">Dengarkan Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">🎧 Genre Favorit</h5>
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white">Rock</li>
                        <li class="list-group-item bg-dark text-white">Pop</li>
                        <li class="list-group-item bg-dark text-white">Jazz</li>
                        <li class="list-group-item bg-dark text-white">Hip-Hop</li>
                        <li class="list-group-item bg-dark text-white">Classical</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">🎶 Playlist Saya</h5>
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white">Playlist 1</li>
                        <li class="list-group-item bg-dark text-white">Playlist 2</li>
                        <li class="list-group-item bg-dark text-white">Playlist 3</li>
                        <li class="list-group-item bg-dark text-white">Playlist 4</li>
                        <li class="list-group-item bg-dark text-white">Playlist 5</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h3>🎧 Musik Anda, Pilihan Anda</h3>
        <p>Sesuaikan preferensi musik Anda dengan genre, album, dan playlist favorit Anda. Jadikan pengalaman mendengarkan musik lebih personal!</p>
        <button class="btn btn-success btn-lg">Simpan Preferensi</button>
    </div>
</div>

@endsection
