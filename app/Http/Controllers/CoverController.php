<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoverController extends Controller
{
    public function uploadCover(Request $request)
    {
        // Validasi file
        $request->validate([
            'coverImage' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan file
        $path = $request->file('coverImage')->store('public/covers');

        // Ambil nama file
        $fileName = basename($path);

        // Simpan nama file ke session (atau database jika diperlukan)
        session(['coverImage' => $fileName]);

        return back()->with('success', 'Cover lagu berhasil diunggah.');
    }
}
