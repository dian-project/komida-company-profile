<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'tujuan',
        'sasaran',
        'lokasi',
        'tanggal',
        'gambar',
        'status',
        'slug',
    ];

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
        ];
    }
}