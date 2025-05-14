<?php

namespace App\Http\Controllers;

use App\Models\pekerja;
use App\Models\pesan;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerja = pekerja::all();
        $pesan = pesan::all();
        return view('pekerja.index', compact('pekerja', 'pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the view to create a new pekerja
        return view('pekerja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'jenis_pekerjaan' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong.',
            'umur.required' => 'Umur tidak boleh kosong.',
            'no_hp.required' => 'Nomor HP tidak boleh kosong.',
            'alamat.required' => 'Alamat tidak boleh kosong.',
            'jenis_pekerjaan.required' => 'Jenis pekerjaan tidak boleh kosong.',
            'cover.image' => 'File yang diunggah harus berupa gambar.',
            'cover.mimes' => 'File yang diunggah harus berupa jpeg, png, jpg, atau gif.',
            'cover.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        // Handle file upload if a cover image is provided
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/pekerja'), $filename);
        } else {
            $filename = null;
        }

        // Create a new pekerja record in the database
        pekerja::create([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
            'jenis_pekerjaan' => $request->input('jenis_pekerjaan'),
            'cover' => $filename,
        ]);

        // Redirect back to the pekerja index with a success message
        return redirect()->route('pekerja.index')->with('success', 'Pekerja berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function show(pekerja $pekerja)
    {
        // Return the view to show a specific pekerja
        return view('pekerja.show', compact('pekerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function edit(pekerja $pekerja)
    {
        // Return the view to edit a specific pekerja
        return view('pekerja.edit', compact('pekerja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pekerja $pekerja)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'jenis_pekerjaan' => 'required|string|max:255',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong.',
            'umur.required' => 'Umur tidak boleh kosong.',
            'no_hp.required' => 'Nomor HP tidak boleh kosong.',
            'alamat.required' => 'Alamat tidak boleh kosong.',
            'jenis_pekerjaan.required' => 'Jenis pekerjaan tidak boleh kosong.',
            'cover.image' => 'File yang diunggah harus berupa gambar.',
            'cover.mimes' => 'File yang diunggah harus berupa jpeg, png, jpg, atau gif.',
            'cover.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        // Handle file upload if a cover image is provided
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/pekerja'), $filename);
        } else {
            $filename = $pekerja->cover; // Keep the existing cover if not updated
        }

        // Update the pekerja record in the database
        $pekerja->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
            'jenis_pekerjaan' => $request->input('jenis_pekerjaan'),
            'cover' => $filename,
        ]);

        // Redirect back to the pekerja index with a success message
        return redirect()->route('pekerja.index')->with('success', 'Pekerja berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pekerja  $pekerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(pekerja $pekerja)
    {
        // Delete the pekerja record from the database
        $pekerja->delete();

        // Redirect back to the pekerja index with a success message
        return redirect()->route('pekerja.index')->with('success', 'Pekerja berhasil dihapus.');
    }
}
