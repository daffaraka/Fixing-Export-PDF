<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
class shop_detailController extends Controller
{
    public function index($id)
    {
        $data = barang::where('id_barang',$id)->first();
        return view ('user.shop_detail',compact('data'));
    }
}
