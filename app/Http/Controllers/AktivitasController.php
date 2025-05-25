<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use App\Models\pesan;

class AktivitasController extends Controller
{
    public function index()
    {
        $pesan = pesan::latest()->get();

        $aktivitas = Aktivitas::orderBy('created_at', 'desc')->paginate(10);
        return view('aktivitas.index', compact('aktivitas', 'pesan'));
    }
}
