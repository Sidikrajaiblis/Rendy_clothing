<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Models\Aktivitas;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::latest()->get();
        $pesan = pesan::latest()->get();
        return view('kategori.index', compact('kategori', 'pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pesan = pesan::all();
        return view('kategori.create', compact('pesan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_kategori' => 'required|string|max:255',
            ],
            [
                'nama_kategori.required' => 'Nama kategori tidak boleh kosong',
                'nama_kategori.string' => 'Nama kategori harus berupa string',
                'nama_kategori.max' => 'Nama kategori tidak boleh lebih dari 255 karakter',
            ]
        );

        $kategori = new kategori();

        $kategori->nama_kategori  = $request->nama_kategori;
        $kategori->save();

        Aktivitas::create([
            'pesan' => 'Menambahkan kategori: ' . $kategori->nama_kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategori)
    {
        $pesan = pesan::all();
        return view('kategori.edit', compact('kategori', 'pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $kategori)
    {
        $request->validate(
            [
                'nama_kategori' => 'required|string|max:255',
            ],
            [
                'nama_kategori.required' => 'Nama kategori tidak boleh kosong',
                'nama_kategori.string' => 'Nama kategori harus berupa string',
                'nama_kategori.max' => 'Nama kategori tidak boleh lebih dari 255 karakter',
            ]
        );

        $kategori->nama_kategori  = $request->nama_kategori;
        $kategori->save();

        // Catat aktivitas
        Aktivitas::create([
            'pesan' => 'Memperbarui kategori: ' . $kategori->nama_kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $kategori)
    {
        if ($kategori->produk()->count() > 0) {
            return redirect()->route('kategori.index')->with('error', 'Kategori tidak dapat dihapus karena memiliki produk terkait.');
        }
        $kategori->delete();

        // Catat aktivitas
        Aktivitas::create([
            'pesan' => 'Menghapus kategori: ' . $kategori->nama_kategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
