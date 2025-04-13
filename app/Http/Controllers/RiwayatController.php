<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    // Menampilkan halaman riwayat rekomendasi
    public function index()
    {
        // Logika untuk mengambil data riwayat dari database
        $history = [
            ['title' => 'Lagu X', 'artist' => 'Artis X', 'date' => '2025-04-09'],
            ['title' => 'Lagu Y', 'artist' => 'Artis Y', 'date' => '2025-04-08'],
        ];

        return view('riwayat.index', ['history' => $history]);
    }
}
