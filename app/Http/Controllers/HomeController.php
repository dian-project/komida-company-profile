<?php
namespace App\Http\Controllers;

use App\Models\KontenHalaman;

class HomeController extends Controller
{
    public function index()
    {
        $konten = KontenHalaman::where('halaman', 'home')
            ->pluck('isi', 'kunci');

        return view('welcome', compact('konten'));
    }
}