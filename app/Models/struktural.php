<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struktural extends Model
{
    use HasFactory;

    protected $table = 'struktural';
    protected $fillable = [
        'nama_struktural',
        'jabatan',
        'foto',
        'deskripsi',
    ];
    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/struktural/' . $this->cover))) {
            return unlink(public_path('images/struktural/' . $this->cover));
        }
    }
}
