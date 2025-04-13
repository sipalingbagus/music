<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferensiController extends Controller
{
    // Menampilkan halaman preferensi musik
    public function index()
    {
        // Logika untuk mengambil data preferensi (jika diperlukan)
        return view('preferensi.index'); // Pastikan file view ini tersedia
    }
}

