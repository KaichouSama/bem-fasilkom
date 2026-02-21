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
            'logo_kabinet' => 'default.png',
            'filosofi_nama' => "Kabinet Sahitya adalah sebuah kata yang membawa pesan kuat tentang solidaritas dan kebersamaan. Kami menyadari bahwa fasilkom adalah rumah bagi beragam pemikiran dan potensi. Oleh karena itu, Sahitya hadir bukan untuk menjadi yang paling bersinar sendirian, tetapi untuk memastikan tidak ada satupun dari kita yang tertinggal dalam kegelapan.\n
                Semangat Sahitya adalah semangat ‘saling’. Saling asah dalam edukasi, saling asih dalam kekeluargaan, dan saling asuh dalam memperjuangkan aspirasi. Kami ingin menjadikan BEM sebagai ruang belajar yang nyaman, dimana kesalahan ditanggapi dengan evaluasi yang membangun, bukan penghakiman. Dengan semangat Sahitya, kami mengajak seluruh elemen mahasiswa untuk berjalan beriringan, mengubah perbedaan menjadi kekuatan, dan menjadikan kolaborasi sebagai kunci utama dalam setiap dinamika kampus.\n",

            'filosofi_logo' => "Elemen Bagian Biru yang merupakan Bentuk Geometris yang menyerupai tunas menggambarkan pertumbuhan kompetensi dan nalar setiap fungsionaris yang terus diasah. Posisi yang terlindungi di tengah menyiratkan bahwa Kabinet Sahitya adalah inkubator bagi lahirnya gagasan-gagasan brilian dan karakter mahasiswa yang berintegritas, menjadi inti kekuatan organisasi yang logis dan terpercaya.\n
                Elemen Bagian Merah yang merupakan Bentuk lengkung dinamis yang menggambarkan sayap pergerakan yang mengayomi. Sebagai representasi fungsi advokasi dan pelayanan, elemen ini hadir untuk melindungi potensi mahasiswa sekaligus memberikan daya dorong agar setiap aspirasi dan karya dapat ‘terbang’ tinggi, berdampak luas, dan membawa kemajuan nyata bagi seluruh elemen fakultas.\n
                Warna Biru Navy ini melambangkan intelektualitas dan kedewasaan berpikir yang menjadi fondasi utama mahasiswa Fasilkom. Dalam semangat Sahitya, Warna ini merepresentasikan aspek ‘Saling Asah’, mencerminkan ketenangan dan kedalaman logika dalam menghadapi dinamika kampus, serta komitmen untuk selalu mengedepankan solusi berbasis data dan pemikiran kritis yang profesional.\n
                Warna Merah Maroon merepresentasikan keberanian yang matang serta solidaritas yang hangat. Sejalan dengan nilai ‘Saling Asih’ dan ‘Saling Asuh’, warna ini menyimbolkan komitmen kuat BEM Fasilkom dalam memperjuangkan aspirasi mahasiswa, serta dedikasi untuk menjaga keharmonisan dan kekeluargaan di lingkungan fakultas.\n"
        ]);
    }
}
