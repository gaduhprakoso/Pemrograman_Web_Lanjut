<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
public function index()
{
    // ... (kode insert, update, delete sebelumnya di-comment)

    $data = DB::table('m_kategori')->get();
    return view('kategori', ['data' => $data]);
}
}