<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table ='upload';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama', 'image', 'total'];
    public $timestamps = false;
}
