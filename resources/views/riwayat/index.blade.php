@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">🎧 Riwayat Rekomendasi</h1>
    
    <div class="card shadow-sm bg-dark text-white" style="border-radius: 20px;">
        <div class="card-body">
            <table class="table table-dark table-hover table-bordered text-center" style="border-radius: 15px; overflow: hidden;">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Judul Lagu</th>
                        <th>Artis</th>
                        <th>Tanggal Rekomendasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $item)
                        <tr>
                            <td class="align-middle">{{ $item['title'] }}</td>
                            <td class="align-middle">{{ $item['artist'] }}</td>
                            <td class="align-middle">{{ $item['date'] }}</td>
                            <td class="align-middle">
    @if (isset($item['file_path']))
        <button class="btn btn-sm btn-info me-2" onclick="playSong('{{ asset('storage/' . $item['file_path']) }}')">🎵 Putar</button>
    @else
        <span class="text-muted">Tidak Tersedia</span>
    @endif
    <button class="btn btn-sm btn-danger">🗑️ Hapus</button>
</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function playSong(filePath) {
        const audio = new Audio(filePath);
        audio.play();
    }
</script>
@endsection
