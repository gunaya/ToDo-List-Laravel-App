<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = ['nama_barang','foto_barang','harga_beli','harga_jual','jumlah','kadaluarsa'];
}
