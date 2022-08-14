<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table ='barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = ['id_barang','image', 'nama_barang', 'kategori', 'harga', 'deskripsi'];
    public $timestamps = false;
}
