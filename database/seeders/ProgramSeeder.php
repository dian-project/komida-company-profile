<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Pendampingan Usaha',
                'slug' => 'pendampingan-usaha',
                'kategori' => 'Pemberdayaan Ekonomi',
                'deskripsi' => 'Pendampingan bagi anggota untuk mengembangkan usaha agar lebih produktif dan berkelanjutan.',
                'tujuan' => 'Meningkatkan kemampuan anggota dalam menjalankan usaha.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pendampingan usaha.jpg',
            ],
            [
                'nama' => 'Edukasi Keuangan',
                'slug' => 'edukasi-keuangan',
                'kategori' => 'Pendidikan',
                'deskripsi' => 'Edukasi mengenai pengelolaan keuangan rumah tangga dan usaha.',
                'tujuan' => 'Meningkatkan pemahaman tentang keuangan.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/edukasi keuangan.jpg',
            ],
            [
                'nama' => 'Kegiatan Kelompok',
                'slug' => 'kegiatan-kelompok',
                'kategori' => 'Kegiatan Anggota',
                'deskripsi' => 'Kegiatan kelompok untuk mempererat hubungan dan kerja sama antaranggota.',
                'tujuan' => 'Meningkatkan kebersamaan dan komunikasi anggota.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Kelompok anggota',
                'gambar' => 'images/programs/Kegiatan kelompok.jpg',
            ],
            [
                'nama' => 'Literasi Digital',
                'slug' => 'literasi-digital',
                'kategori' => 'Pendidikan',
                'deskripsi' => 'Pengenalan pemanfaatan teknologi digital untuk mendukung aktivitas sehari-hari dan usaha.',
                'tujuan' => 'Meningkatkan pengetahuan digital anggota.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Literasi digital.jpg',
            ],
            [
                'nama' => 'Pelatihan Kewirausahaan',
                'slug' => 'pelatihan-kewirausahaan',
                'kategori' => 'Pelatihan',
                'deskripsi' => 'Pelatihan dasar kewirausahaan untuk membantu anggota mengembangkan usaha.',
                'tujuan' => 'Meningkatkan keterampilan berwirausaha.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pelatihan kewirausahaan.jpg',
            ],
            [
                'nama' => 'Pelayanan Anggota',
                'slug' => 'pelayanan-anggota',
                'kategori' => 'Pelayanan',
                'deskripsi' => 'Pelayanan dan pendampingan untuk membantu memenuhi kebutuhan anggota.',
                'tujuan' => 'Meningkatkan kualitas pelayanan kepada anggota.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Kantor layanan KOMIDA',
                'gambar' => 'images/programs/Pelayanan anggota.jpg',
            ],
            [
                'nama' => 'Pemasaran Produk',
                'slug' => 'pemasaran-produk',
                'kategori' => 'Pengembangan Usaha',
                'deskripsi' => 'Pendampingan pemasaran produk agar jangkauan pasar usaha anggota semakin luas.',
                'tujuan' => 'Meningkatkan pemasaran produk anggota.',
                'sasaran' => 'Anggota yang memiliki usaha',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pemasaran produk.jpg',
            ],
            [
                'nama' => 'Pemberdayaan Ekonomi',
                'slug' => 'pemberdayaan-ekonomi',
                'kategori' => 'Pemberdayaan',
                'deskripsi' => 'Kegiatan untuk mendukung kemandirian ekonomi anggota dan keluarganya.',
                'tujuan' => 'Mendukung peningkatan kesejahteraan ekonomi.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pemberdayaan ekonomi.jpg',
            ],
            [
                'nama' => 'Pengembangan Produk UMKM',
                'slug' => 'pengembangan-produk-umkm',
                'kategori' => 'Pengembangan Usaha',
                'deskripsi' => 'Pendampingan pengembangan kualitas dan variasi produk usaha mikro.',
                'tujuan' => 'Mendorong produk usaha menjadi lebih kompetitif.',
                'sasaran' => 'Pelaku usaha mikro',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pengembangan produk umkm.jpg',
            ],
            [
                'nama' => 'Perencanaan Usaha',
                'slug' => 'perencanaan-usaha',
                'kategori' => 'Pelatihan',
                'deskripsi' => 'Pembelajaran mengenai perencanaan usaha dan pengelolaan kegiatan bisnis.',
                'tujuan' => 'Membantu anggota menyusun rencana usaha.',
                'sasaran' => 'Anggota yang memiliki usaha',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Perencanaan usaha.jpg',
            ],
            [
                'nama' => 'Pelatihan Pengelolaan Keuangan',
                'slug' => 'pelatihan-pengelolaan-keuangan',
                'kategori' => 'Pelatihan',
                'deskripsi' => 'Pelatihan pencatatan pemasukan, pengeluaran, dan pengelolaan keuangan usaha.',
                'tujuan' => 'Meningkatkan keterampilan mengelola keuangan.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pelatihan Pengelolaan Keuangan.jpg',
            ],
            [
                'nama' => 'Pendampingan Kelompok',
                'slug' => 'pendampingan-kelompok',
                'kategori' => 'Pendampingan',
                'deskripsi' => 'Pendampingan kelompok untuk mendukung kerja sama dan perkembangan anggota.',
                'tujuan' => 'Mendorong kelompok anggota menjadi lebih aktif.',
                'sasaran' => 'Kelompok anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pendampingan Kelompok.jpg',
            ],
            [
                'nama' => 'Pengembangan Usaha Mikro',
                'slug' => 'pengembangan-usaha-mikro',
                'kategori' => 'Pengembangan Usaha',
                'deskripsi' => 'Dukungan pengembangan usaha mikro melalui peningkatan kemampuan dan pengelolaan usaha.',
                'tujuan' => 'Mendukung pertumbuhan usaha mikro anggota.',
                'sasaran' => 'Pelaku usaha mikro',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Pengembangan Usaha Mikro.jpg',
            ],
            [
                'nama' => 'Edukasi Kesehatan Keluarga',
                'slug' => 'edukasi-kesehatan-keluarga',
                'kategori' => 'Edukasi',
                'deskripsi' => 'Edukasi mengenai pentingnya menjaga kesehatan diri dan keluarga.',
                'tujuan' => 'Meningkatkan pengetahuan tentang kesehatan keluarga.',
                'sasaran' => 'Anggota dan keluarga',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Edukasi Kesehatan Keluarga.jpg',
            ],
            [
                'nama' => 'Peningkatan Kapasitas Anggota',
                'slug' => 'peningkatan-kapasitas-anggota',
                'kategori' => 'Pengembangan Anggota',
                'deskripsi' => 'Kegiatan untuk meningkatkan pengetahuan, keterampilan, dan kemampuan anggota.',
                'tujuan' => 'Mendorong anggota lebih mandiri dan berkembang.',
                'sasaran' => 'Anggota KOMIDA',
                'lokasi' => 'Wilayah layanan KOMIDA',
                'gambar' => 'images/programs/Peningkatan Kapasitas Anggota.jpg',
            ],
        ];

        foreach ($data as $item) {
            Program::updateOrCreate(
                ['slug' => $item['slug']],
                array_merge([
                    'tanggal' => null,
                    'status' => 'Aktif',
                ], $item)
            );
        }
    }
}