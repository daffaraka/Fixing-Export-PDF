<?php

namespace App\Http\Controllers;
use App\best_seller;
use App\barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $databestseller = barang::join('best_seller', 'barang.id_barang', '=', 'best_seller.id_barang')->get();
        return view('user.home', compact('databestseller'));
    }
}
