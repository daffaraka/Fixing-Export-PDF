<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produkDipesan extends Model
{
    protected $table ='produk_dipesan';
    protected $primaryKey = 'id_pd';
    protected $fillable = ['id_pd','name_pd','tlp_pd','email_pd','alamat_pd','provinsi_pd','kota_pd','ekspedisi_pd','berat_pd','kode_pos_pd','subtotal_pd','total_ongkir_pd','total_belanja_pd','tanggal_pd'];
    public $timestamps = false;
}
