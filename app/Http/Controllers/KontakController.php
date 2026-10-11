<?php
namespace App\Http\Controllers;

use App\Models\KontenHalaman;

class KontakController extends Controller
{
    public function index()
    {
        $konten = KontenHalaman::where('halaman', 'kontak')
            ->pluck('isi', 'kunci');

        return view('kontak', compact('konten'));
    }
}