@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-dark text-white text-center mb-4 p-4" style="border-radius: 20px;">
        <h2 class="mb-4">🎉 Selamat Datang, {{ auth()->user()->email }}</h2>
        <form action="{{ route('upload.song.cover') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="songTitle" class="form-label">Judul Lagu</label>
                <input type="text" class="form-control" id="songTitle" name="songTitle" required>
            </div>
            <div class="mb-3">
                <label for="songArtist" class="form-label">Nama Penyanyi</label>
                <input type="text" class="form-control" id="songArtist" name="songArtist" required>
            </div>
            <div class="mb-3">
                <label for="songFile" class="form-label">File Lagu</label>
                <input type="file" class="form-control" id="songFile" name="songFile" accept="audio/*" required>
            </div>
            <div class="mb-3">
                <label for="coverImage" class="form-label">Cover Lagu</label>
                <input type="file" class="form-control" id="coverImage" name="coverImage" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">Unggah Lagu dan Cover</button>
        </form>
    </div>

    <div class="card bg-dark text-white" style="border-radius: 20px;">
        <div class="card-body d-flex align-items-center">
            <img id="songCover" src="{{ $currentSong ? asset('storage/' . $currentSong->cover_image) : asset('images/default-cover.jpg') }}" class="img-fluid rounded me-4" style="max-width: 200px;">
            <div class="text-start">
                <h4 id="songTitle">{{ $currentSong ? $currentSong->title : 'Judul Lagu' }}</h4>
                <p id="songArtist">{{ $currentSong ? $currentSong->artist : 'Nama Artis' }}</p>
                <audio id="audioPlayer" controls autoplay class="w-100">
                    <source src="{{ $currentSong ? asset('storage/' . $currentSong->file_path) : '' }}" type="audio/mpeg">
                    Browser Anda tidak mendukung pemutar audio.
                </audio>
                <div class="mt-3">
                    <button class="btn btn-light btn-lg" onclick="prevSong()">⏮️ Sebelumnya</button>
                    <button class="btn btn-light btn-lg" onclick="audioPlayer.paused ? audioPlayer.play() : audioPlayer.pause()">⏯️ Play/Pause</button>
                    <button class="btn btn-light btn-lg" onclick="nextSong()">⏭️ Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5">
    <h3 class="text-center text-white">🎵 Koleksi Album Hollywood 🎵</h3>
    <div class="row row-cols-1 row-cols-md-5 g-4 mt-3 overflow-auto" style="max-height: 500px;">

        <!-- Contoh Album -->
        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/mj.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Thriller</h5>
                    <p class="card-text">Michael Jackson - Album ikonik yang memecahkan rekor.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/adelle.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">25</h5>
                    <p class="card-text">Adele - Salah satu album terlaris sepanjang masa.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/1989.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">1989</h5>
                    <p class="card-text">Taylor Swift - Transformasi menuju pop modern.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/abbey.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Abbey Road</h5>
                    <p class="card-text">The Beatles - Salah satu album terbaik sepanjang masa.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/damn.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">DAMN.</h5>
                    <p class="card-text">Kendrick Lamar - Album pemenang Pulitzer Prize.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/pink.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">The Wall</h5>
                    <p class="card-text">Pink Floyd - Kisah epik melalui musik.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/bruce.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Born to Run</h5>
                    <p class="card-text">Bruce Springsteen - Perjalanan menuju kebebasan.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/rumor.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Rumours</h5>
                    <p class="card-text">Fleetwood Mac - Album yang mendefinisikan generasi.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/amy.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Back to Black</h5>
                    <p class="card-text">Amy Winehouse - Mahakarya yang abadi.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white h-100">
                <img src="{{ asset('images/lemon.jpg') }}" class="card-img-top" alt="Album Cover">
                <div class="card-body">
                    <h5 class="card-title">Lemonade</h5>
                    <p class="card-text">Beyoncé - Album visual yang revolusioner.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
   const songs = [
    @foreach($allSongs as $song)
    {
        title: "{{ $song->title }}",
        artist: "{{ $song->artist }}",
        filePath: "{{ asset('storage/' . $song->file_path) }}",
        coverPath: "{{ asset('storage/' . $song->cover_image) }}",
    },
    @endforeach
];


let currentIndex = 0;

const audioPlayer = document.getElementById('audioPlayer');
const songTitle = document.getElementById('songTitle');
const songArtist = document.getElementById('songArtist');
const songCover = document.getElementById('songCover');

function loadSong(index) {
    if (index < 0 || index >= songs.length) {
        return;
    }
    currentIndex = index;

    const song = songs[currentIndex];

    // Perbarui elemen HTML
    songTitle.textContent = song.title; // Update Judul Lagu
    songArtist.textContent = song.artist; // Update Nama Artis
    songCover.src = song.coverPath; // Update Cover Lagu

    // Perbarui sumber audio
    audioPlayer.src = song.filePath;
    audioPlayer.play();
}


// Fungsi untuk tombol Next dan Previous
function prevSong() {
    if (currentIndex > 0) {
        loadSong(currentIndex - 1);
    }
}

function nextSong() {
    if (currentIndex < songs.length - 1) {
        loadSong(currentIndex + 1);
    }
}


// Pastikan lagu pertama dimuat saat halaman selesai dimuat
document.addEventListener('DOMContentLoaded', () => {
    if (songs.length > 0) {
        loadSong(0);
    }
});

</script>

@endsection
