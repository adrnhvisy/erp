<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'kode_barang',
    'nama_barang',
    'kategori',
    'satuan',
    'stok',
    'stok_minimum',
    'harga',
    'status',
])]
class Barang extends Model
{
    //
}
