<?php
namespace Database\Seeders;

use App\Models\Kategori; //cara kategori sama seeder kenalan
use Illuminate\Database\Seeder;
class KategoriSeeder extends Seeder
{
 public function run(): void //menjalankan fungsi seeder dan mengisi kategori 
    {
        $daftarKategori = ['Novel', 'Pengembangan Diri', 'Teknologi', 'Sejarah','Sains'];

        foreach ($daftarKategori as $nama) {
            Kategori::create(['nama_kategori' => $nama]);
        }
    }
}
