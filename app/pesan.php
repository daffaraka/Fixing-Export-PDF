<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table ='pesan';
    protected $primaryKey = 'id_pesan';
    protected $fillable = ['id_pesan','nama_pesan', 'wa_pesan', 'email_pesan', 'isi_pesan'];
    public $timestamps = false;
}
