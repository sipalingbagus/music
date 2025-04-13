<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritController extends Controller
{
    // Menampilkan halaman lagu favorit
    public function index()
    {
        // Logika untuk mengambil data lagu favorit (misalnya dari database)
        $favorites = [
            ['title' => 'Lagu A', 'artist' => 'Artis A'],
            ['title' => 'Lagu B', 'artist' => 'Artis B'],
        ];

        return view('favorit.index', ['favorites' => $favorites]);
    }
}
