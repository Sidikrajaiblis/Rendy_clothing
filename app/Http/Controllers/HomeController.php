<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use App\Models\pekerja;
use App\Models\kategori;
use App\Models\produk;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil 5 aktivitas terbaru dari tabel aktivitas
        // Ambil 5 aktivitas terbaru dari tabel aktivitas
        $aktivitas = Aktivitas::orderBy('created_at', 'desc')->limit(5)->get()->map(function($item) {
            return [
                'pesan' => $item->pesan,
                'waktu' => $item->created_at->diffForHumans(),
            ];
        });

        return view('home', [
            'pekerja' => Pekerja::all(),
            'kategori' => Kategori::all(),
            'produk' => Produk::all(),
            'pesan' => Pesan::latest()->get(),
            'aktivitas' => $aktivitas,
        ]);
    }
}
