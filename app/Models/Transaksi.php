<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id_obat','kode_obat','total_barang','total_harga','created_at'];
    protected $table = 'transaksi';
}
