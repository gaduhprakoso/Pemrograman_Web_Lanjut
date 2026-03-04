<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
    {
        // Memanggil semua seeder sesuai urutan relasi tabel (Foreign Key)
        $this->call([
            LevelSeeder::class,           // Jalankan pertama karena dirujuk m_user
            UserSeeder::class,            // Jalankan setelah level ada
            KategoriSeeder::class,        // Jalankan sebelum m_barang
            BarangSeeder::class,          // Jalankan setelah kategori ada
            StokSeeder::class,            // Membutuhkan barang_id dan user_id
            PenjualanSeeder::class,       // Membutuhkan user_id
            PenjualanDetailSeeder::class, // Membutuhkan penjualan_id dan barang_id
        ]);
    }
}
