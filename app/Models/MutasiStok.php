<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'barang_id',
    'tipe',
    'jumlah',
    'keterangan',
    'tanggal',
])]
class MutasiStok extends Model
{
    //
}
