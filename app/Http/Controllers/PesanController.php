<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;
use App\Models\Aktivitas;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = pesan::latest()->get();
        return view('pesan.index', compact('pesan'));
    }

    public function create()
    {
        $pesan = pesan::all();
        return view('welcome', compact('pesan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pesan' => 'required',
            'email_pesan' => 'required',
            'pesan' => 'required',
        ]);

        pesan::create($request->all());

        Aktivitas::create([
            'pesan' => 'Pesan baru diterima dari ' . $request->nama_pesan,
        ]);

        return response('OK', 200);
    }

    public function destroy(pesan $pesan)
    {
        $pesan->delete();

        Aktivitas::create([
            'pesan' => 'Pesan dari ' . $pesan->nama_pesan . ' telah dihapus.',
        ]);
        
        return redirect()->route('pesan.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
