<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua lagu
        $allSongs = Song::all(); // Ambil semua lagu dari database
        $currentSong = $allSongs->first(); // Pilih lagu pertama sebagai default
        return view('dashboard.index', compact('allSongs', 'currentSong'));
    }
}
