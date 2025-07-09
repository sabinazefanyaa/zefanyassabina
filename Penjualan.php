<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    
    protected $fillable = ['buku_id', 'tanggal', 'eksemplar'];

    //Relasi  belongsTo
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
