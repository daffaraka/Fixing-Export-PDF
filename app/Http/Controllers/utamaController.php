<?php

namespace App\Http\Controllers;
use App\best_seller;
use App\barang;
use Illuminate\Http\Request;

class utamaController extends Controller
{
    
    public function index()
    {
        $databestseller = barang::join('best_seller', 'barang.id_barang', '=', 'best_seller.id_barang')->get();
        return view('user.home', compact('databestseller'));
    }
}
