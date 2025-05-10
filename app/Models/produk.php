<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'gambar_produk',
        'id_kategori',
    ];
    public $timestamps = true;
    public function deleteImage()
    {
        if ($this->gambar_produk && file_exists(public_path('images/produk/' . $this->gambar_produk))) {
            return unlink(public_path('images/produk/' . $this->gambar_produk));
        }
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
}
