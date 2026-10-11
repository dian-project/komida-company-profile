<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontenHalaman extends Model
{
    protected $table = 'konten_halamans';

    protected $fillable = [
        'halaman',
        'kunci',
        'isi',
        'gambar',
    ];
}