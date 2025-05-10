<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerja extends Model
{
    use HasFactory;

    protected $table = 'pekerja';
    protected $fillable = [
        'nama',
        'umur',
        'no_hp',
        'alamat',
        'jenis_pekerjaan',
        'cover',
    ];
    public $timestamps = true;
    

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/pekerja/' . $this->cover))) {
            return unlink(public_path('images/pekerja/' . $this->cover));
        }
    }
    
}
