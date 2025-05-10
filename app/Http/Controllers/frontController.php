<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pekerja;
use App\Models\struktural;
use App\Models\produk;
use App\Models\kategori;

class frontController extends Controller
{
    public function index()
    {
        $pekerja = pekerja::all();
        $struktural = struktural::all();
        $kategori = kategori::all();
        $produk = produk::all();
        return view('welcome', compact('pekerja', 'struktural', 'kategori', 'produk'));
    }
}
