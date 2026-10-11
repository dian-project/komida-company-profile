<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KontenHalaman;

class KontenHalamanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // HOME
            [
                'halaman' => 'home',
                'kunci' => 'judul',
                'isi' => 'Koperasi Mitra Dhuafa (KOMIDA)',
                'gambar' => null,
            ],
            [
                'halaman' => 'home',
                'kunci' => 'deskripsi',
                'isi' => 'Bersama mendukung pemberdayaan ekonomi dan peningkatan kesejahteraan masyarakat.',
                'gambar' => null,
            ],
            [
                'halaman' => 'home',
                'kunci' => 'teks_tombol',
                'isi' => 'Lihat Program Kami',
                'gambar' => null,
            ],

            // PROFIL
            [
                'halaman' => 'profil',
                'kunci' => 'judul',
                'isi' => 'Profil KOMIDA',
                'gambar' => null,
            ],
            [
                'halaman' => 'profil',
                'kunci' => 'sejarah',
                'isi' => 'Koperasi Mitra Dhuafa (KOMIDA) didirikan pada 28 Juni 2004 dengan nama awal berbentuk yayasan yaitu Yayasan Mitra Dhuafa (YAMIDA) 
                oleh para tokoh yang telah berpengalaman dalam program keuangan mikro sistem Grameen Bank sejak tahun 1997',
                'gambar' => null,
            ],
            [
                'halaman' => 'profil',
                'kunci' => 'visi',
                'isi' => 'Menjadi lembaga keuangan mikro terkemuka yang efisien dan tepat waktu guna membantu perempuan berpendapatan rendah
                meningkatkan pendapatan rumah tangga serta taraf kesehatan dan pendidikan anak-anak mereka',
                'gambar' => null,
            ],
            [
                'halaman' => 'profil',
                'kunci' => 'misi',
                'isi' => 'Menyediakan layanan simpan pinjam dan program nonkeuangan (pelatihan kesehatan, motivasi pendidikan, serta pengelolaan keuangan keluarga) yang didukung oleh staf kompeten dan berintegritas',
                'gambar' => null,
            ],

            // KONTAK
            [
                'halaman' => 'kontak',
                'kunci' => 'judul',
                'isi' => 'Hubungi KOMIDA',
                'gambar' => null,
            ],
            [
                'halaman' => 'kontak',
                'kunci' => 'deskripsi',
                'isi' => 'Hubungi kami untuk mendapatkan informasi lebih lanjut mengenai layanan dan program KOMIDA.',
                'gambar' => null,
            ],
            [
                'halaman' => 'kontak',
                'kunci' => 'alamat',
                'isi' => 'Kantor pusat Koperasi Mitra Dhuafa (KOMIDA) 
                beralamat di Jl. Raya Lenteng Agung Km.3, No.10, Rt.04/Rw.01, Lenteng Agung, Jagakarsa, Jakarta Selatan 12610',
                'gambar' => null,
            ],
            [
                'halaman' => 'kontak',
                'kunci' => 'telepon',
                'isi' => '(021) 29409875',
                'gambar' => null,
            ],
            [
                'halaman' => 'kontak',
                'kunci' => 'email',
                'isi' => 'sekretariat@mitradhuafa.com',
                'gambar' => null,
            ],
        ];

        foreach ($data as $item) {
            KontenHalaman::updateOrCreate(
                [
                    'halaman' => $item['halaman'],
                    'kunci' => $item['kunci'],
                ],
                [
                    'isi' => $item['isi'],
                    'gambar' => $item['gambar'],
                ]
            );
        }
    }
}