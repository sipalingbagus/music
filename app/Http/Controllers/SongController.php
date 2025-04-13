<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    public function uploadSongCover(Request $request)
    {
        // Validasi data
        $request->validate([
            'songTitle' => 'required|string|max:255',
            'songArtist' => 'required|string|max:255',
            'songFile' => 'required|file|mimes:mp3,wav|max:10240', // Maksimum 10MB
            'coverImage' => 'required|file|mimes:jpg,jpeg,png|max:5120', // Maksimum 5MB
        ]);

        // Simpan file lagu dan cover
        $songPath = $request->file('songFile')->store('songs', 'public');
        $coverPath = $request->file('coverImage')->store('covers', 'public');

        // Simpan data ke database
        Song::create([
            'title' => $request->songTitle,
            'artist' => $request->songArtist,
            'file_path' => $songPath,
            'cover_image' => $coverPath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Lagu dan cover berhasil diunggah!');
    }
}
