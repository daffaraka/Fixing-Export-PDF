<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan_detail extends Model
{
    protected $table ='pesanan_detail';
    protected $primaryKey = 'id_pesanan_detail';
    protected $fillable = ['id_pesanan_detail','produk_id', 'pesanan_id', ' jumlah', 'jumlah_harga'];
    public $timestamps = false;

    public function barang()
    {
        return $this->belongsTo(barang::class, 'produk_id', 'id_barang');
    }

    
}
