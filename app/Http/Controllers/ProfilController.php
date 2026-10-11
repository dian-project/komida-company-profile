<?php
namespace App\Http\Controllers;

use App\Models\KontenHalaman;

class ProfilController extends Controller
{
    public function index()
    {
        $konten = KontenHalaman::where('halaman', 'profil')
            ->pluck('isi', 'kunci');

        return view('profil', compact('konten'));
    }
}