<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari 'aktivitas'
    protected $table = 'aktivitas';

    // Kolom yang bisa diisi (opsional, untuk mass assignment)
    protected $fillable = ['pesan'];
}
