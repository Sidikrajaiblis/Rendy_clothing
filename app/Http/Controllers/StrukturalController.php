<?php

namespace App\Http\Controllers;

use App\Models\struktural;
use App\Models\pesan;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktural = struktural::all();
        $pesan = pesan::all();
        return view('struktural.index', compact('struktural', 'pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return the view to create a new struktural
        return view('struktural.create');
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
            'nama_struktural' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ],
        [
            'nama_struktural.required' => 'Nama struktural tidak boleh kosong.',
            'jabatan.required' => 'Jabatan tidak boleh kosong.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.mimes' => 'File yang diunggah harus berupa jpeg, png, jpg, atau gif.',
            'foto.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
        ]);

        // Handle file upload if a foto is provided
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/struktural'), $filename);
        } else {
            $filename = null;
        }

        // Create a new struktural record in the database
        struktural::create([
            'nama_struktural' => $request->input('nama_struktural'),
            'jabatan' => $request->input('jabatan'),
            'foto' => $filename,
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('struktural.index')->with('success', 'Struktural berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function show(struktural $struktural)
    {
        // Display the details of a specific struktural
        return view('struktural.show', compact('struktural'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function edit(struktural $struktural)
    {
        // Return the view to edit a specific struktural
        return view('struktural.edit', compact('struktural'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, struktural $struktural)
    {
        // Validate the incoming request data
        $request->validate([
            'nama_struktural' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ],
        [
            'nama_struktural.required' => 'Nama struktural tidak boleh kosong.',
            'jabatan.required' => 'Jabatan tidak boleh kosong.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.mimes' => 'File yang diunggah harus berupa jpeg, png, jpg, atau gif.',
            'foto.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
        ]);

        // Handle file upload if a foto is provided
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/struktural'), $filename);
            $struktural->deleteImage(); // Delete old image if exists
        } else {
            $filename = $struktural->foto; // Keep the old filename if no new file is uploaded
        }

        // Update the struktural record in the database
        $struktural->update([
            'nama_struktural' => $request->input('nama_struktural'),
            'jabatan' => $request->input('jabatan'),
            'foto' => $filename,
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('struktural.index')->with('success', 'Struktural berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\struktural  $struktural
     * @return \Illuminate\Http\Response
     */
    public function destroy(struktural $struktural)
    {
        // Delete the struktural record from the database
        $struktural->deleteImage(); // Delete the image file if exists
        $struktural->delete();

        return redirect()->route('struktural.index')->with('success', 'Struktural berhasil dihapus.');
    }
}
