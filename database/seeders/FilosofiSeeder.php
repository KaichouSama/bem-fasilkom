<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filosofi;
use Illuminate\Support\Facades\Storage;

class FilosofiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus semua file di folder filosofi
        Storage::disk('public')->deleteDirectory('filosofi');

        // Buat ulang foldernya
        Storage::disk('public')->makeDirectory('filosofi');

        Filosofi::create([
            'nama_kabinet' => 'Kabinet Sinergi',
            'logo' => 'default.png',
            'deskripsi1' => 'BEM FASILKOM merupakan wadah representatif mahasiswa Fakultas Ilmu Komputer yang berperan sebagai penggerak, penghubung, dan pengawal aspirasi mahasiswa.',
            'deskripsi2' => 'Logo BEM FASILKOM melambangkan semangat kebersamaan, intelektualitas, serta inovasi teknologi sebagai dasar pergerakan organisasi.'
        ]);
    }
}
