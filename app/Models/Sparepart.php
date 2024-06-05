<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    protected $table = 'sparepart';
    protected $fillable = ['kode_sparepart', 'nama_sparepart', 'deskripsi', 'harga', 'stok', 'id_suplier'];
}
