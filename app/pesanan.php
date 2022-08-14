<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model

    {
        protected $table ='pesanan';
        protected $primaryKey = 'id_pesanan';
        protected $fillable = ['id_pesanan', 'user_id', 'tanggal', ' status', 'jumlah_harga'];
        public $timestamps = false;
    }
