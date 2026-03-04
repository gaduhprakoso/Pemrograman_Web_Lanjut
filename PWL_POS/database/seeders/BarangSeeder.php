<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Chiki Taro', 'harga_beli' => 4000, 'harga_jual' => 5000],
        ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Oreo', 'harga_beli' => 7000, 'harga_jual' => 8500],
        ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'B003', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2500, 'harga_jual' => 3500],
        ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'B004', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3000, 'harga_jual' => 4500],
        ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'B005', 'barang_nama' => 'Garnier Men', 'harga_beli' => 20000, 'harga_jual' => 25000],
        ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Nivea Body Lotion', 'harga_beli' => 15000, 'harga_jual' => 18000],
        ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'B007', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 10000, 'harga_jual' => 15000],
        ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'B008', 'barang_nama' => 'Wipol 750ml', 'harga_beli' => 15000, 'harga_jual' => 20000],
        ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'B009', 'barang_nama' => 'Panadol', 'harga_beli' => 8000, 'harga_jual' => 10000],
        ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Antangin', 'harga_beli' => 3000, 'harga_jual' => 5000],
    ];
    DB::table('m_barang')->insert($data);
}
}
