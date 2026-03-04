<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Pastikan memanggil DB Facade

class LevelController extends Controller
{
    public function index()
    {
        // Menambahkan 1 data baru ke tabel m_level menggunakan query insert
        DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);

        return 'Insert data baru berhasil';
    }
}