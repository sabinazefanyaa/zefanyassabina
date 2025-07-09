<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'pengarang', 'kategori'];

    //Relasi hasMany
    public function penjualans()
    {
        return $this->hasMany(penjualan::class);
    }

    //Attribute terjual (menjumlahkan semua eksemplar penjualan)
    public function getTerjualAttribute()
    {
        return $this->penjualans()->sum('eksemplar');
    }
}
