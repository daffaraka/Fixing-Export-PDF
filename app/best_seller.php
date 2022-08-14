<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class best_seller extends Model
{
    protected $table ='best_seller';
    protected $primaryKey = 'id_best_seller';
    protected $fillable = ['id_best_seller', 'deskripsi_best_seller'];
    public $timestamps = false;
}
