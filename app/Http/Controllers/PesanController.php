<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = pesan::all();
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

        return response('OK', 200);
    }

    public function destroy(pesan $pesan)
    {
        $pesan->delete();
        return redirect()->route('pesan.index')->with('success', 'Pesan deleted successfully.');
    }
}
