<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
class shopController extends Controller
{
    public function index(Request $r){
        
        if($r){
            $data = barang ::where('nama_barang', 'like', '%'.$r->cari.'%')
            ->orWhere('kategori', 'like', '%'.$r->cari.'%')
            ->get();
        }else{
            $data = barang::all();
        }
        
        return view ('user.shop',compact('data','r'));
        }

        
}
