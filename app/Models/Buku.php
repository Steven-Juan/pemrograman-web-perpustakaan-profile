<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';

    protected $fillable = [
        'judul_buku',
        'penulis',
        'penerbit',
        'tahun_penerbitan',
        'isbn',
        'cover',
        'deskripsi',
        'kategori_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_id');
    }
}
