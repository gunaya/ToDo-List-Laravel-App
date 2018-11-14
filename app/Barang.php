<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = ['nama_barang','foto_barang','kadaluarsa','harga_beli','harga_jual','jumlah','kategori_id'];
}
