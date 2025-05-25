<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use App\Models\pesan;
use Illuminate\Http\Request;
use App\Models\Aktivitas;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::latest()->get();
        $pesan = pesan::latest()->get();
        return view('produk.index', compact('produk', 'pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $pesan = pesan::all();
        return view('produk.create', compact('kategori', 'pesan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string|max:255',
            'gambar_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_kategori' => 'required|exists:kategori,id',
        ],
        [
            'nama_produk.required' => 'Nama produk tidak boleh kosong.',
            'deskripsi_produk.required' => 'Deskripsi produk tidak boleh kosong.',
            'gambar_produk.required' => 'Gambar produk tidak boleh kosong.',
            'gambar_produk.image' => 'File yang diunggah harus berupa gambar.',
            'gambar_produk.mimes' => 'File yang diunggah harus berupa jpeg, png, jpg, atau gif.',
            'gambar_produk.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
            'id_kategori.required' => 'Kategori produk tidak boleh kosong.',
            'id_kategori.exists' => 'Kategori produk tidak valid.',
        ]);
        

        $produk = new produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produk'), $filename);
            $produk->gambar_produk = $filename;
        }

        $produk->save();

        Aktivitas::create([
            'pesan' => 'Produk baru ditambahkan: ' . $produk->nama_produk,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        $pesan = pesan::all();
        $kategori = kategori::all();
        return view('produk.show', compact('produk', 'pesan', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesan = pesan::all();
        $kategori = kategori::all();
        $produk = produk::findOrFail($id);
        return view('produk.edit', compact('produk', 'kategori', 'pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi_produk' => 'required|string|max:255',
            'gambar_produk' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_kategori' => 'required|exists:kategori,id',
        ],
        [
            'nama_produk.required' => 'Nama produk tidak boleh kosong.',
            'deskripsi_produk.required' => 'Deskripsi produk tidak boleh kosong.',
            'gambar_produk.image' => 'File yang diunggah harus berupa gambar.',
            'gambar_produk.mimes' => 'File yang diunggah harus berupa jpeg, png, jpg, atau gif.',
            'gambar_produk.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
            'id_kategori.required' => 'Kategori produk tidak boleh kosong.',
            'id_kategori.exists' => 'Kategori produk tidak valid.',
        ]);

        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->id_kategori = $request->id_kategori;

        if ($request->hasFile('gambar_produk')) {
            if ($produk->gambar_produk) {
                unlink(public_path('images/produk/' . $produk->gambar_produk));
            }
            $file = $request->file('gambar_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/produk'), $filename);
            $produk->gambar_produk = $filename;
        }

        $produk->save();

        Aktivitas::create([
            'pesan' => 'Produk diperbarui: ' . $produk->nama_produk,
        ]);

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        if ($produk->gambar_produk) {
            unlink(public_path('images/produk/' . $produk->gambar_produk));
        }
        $produk->delete();

        Aktivitas::create([
            'pesan' => 'Produk dihapus: ' . $produk->nama_produk,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
