<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = [
    'nama_pengeluaran',
    'kategori',
    'tanggal_pengeluaran',
    'nominal',
    'deskripsi'
];
}
