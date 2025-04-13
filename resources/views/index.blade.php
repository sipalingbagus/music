@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="title">Selamat Datang, {{ $users->email }}</div>
  <a href="{{ route('preferensi') }}"><button>🎧 Input Preferensi Musik</button></a>
  <a href="{{ route('favorit') }}"><button>❤️ Lagu Favorit</button></a>
  <a href="{{ route('riwayat') }}"><button>🕘 Riwayat Rekomendasi</button></a>
  <a href="{{ route('logout') }}"><button>🚪 Logout</button></a>
</div>

<div class="card player">
  <h4 class="mb-3">🎶 Sekarang Memutar:</h4>
  <img id="songCover" src="" alt="cover1.jpg" class="img-fluid rounded mb-3 mx-auto d-block" style="max-width: 200px; border: 2px solid #1db954;">
  <div class="vinyl" id="vinyl"></div>
  <h5 id="songTitle">Judul Lagu</h5>
  <p id="songArtist">Artis</p>

  <audio id="audioPlayer" controls autoplay>
    <source src="" id="audioSource" type="audio/mpeg">
    Browser Anda tidak mendukung pemutar audio.
  </audio>

  <div class="controls d-flex justify-content-between mt-3">
    <button onclick="prevSong()">⏮️ Sebelumnya</button>
    <button onclick="playPause()">⏯️ Play/Pause</button>
    <button onclick="nextSong()">⏭️ Selanjutnya</button>
  </div>
</div>

<div class="sidebar">
  <h5>🎵 Lagu & Album</h5>
  <ul>
    @foreach ($songs as $song)
      <li>
        <a href="{{ route('song.show', $song->id) }}">
          {{ $song->title }} - {{ $song->artist }}
        </a>
      </li>
    @endforeach
  </ul>
</div>
@endsection
