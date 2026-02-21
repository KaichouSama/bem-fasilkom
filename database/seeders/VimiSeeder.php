<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vimi;


class VimiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vimi::create([
            'visi' => 'Mewujudkan BEM Fasilkom sebagai ruang belajar yang inklusif dan responsif, 
                serta menjunjung tinggi nilai kekeluargaan dalam melayani dan memperjuangkan aspirasi mahasiswa.',
            
            'misi' => "Menciptakan iklim organisasi yang suportif dan hangat berlandaskan asas kekeluargaan, sehingga setiap fungsionaris merasa memiliki dan nyaman dalam berkarya bersama.
                Menjadikan setiap program kerja dan kepanitiaan sebagai sarana edukasi yang nyata bagi mahasiswa aktif untuk mengasah soft skill, manajemen waktu, serta kematangan dalam berpikir kritis dan solutif.
                Membangun jalur komunikasi yang responsif, transparan, dan mudah diakses untuk menampung, mengawal, serta menindaklanjuti setiap aspirasi dan keluhan mahasiswa.
                Membuka ruang kolaborasi seluas-luasnya bagi mahasiswa aktif Fasilkom untuk turut serta berkontribusi dan bertukar pikiran demi kemajuan fakultas",
        ]);
    }
}
