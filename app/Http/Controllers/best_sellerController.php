<?php

namespace App\Http\Controllers;
use App\best_seller;
use App\barang;
use Illuminate\Http\Request;

class best_sellerController extends Controller
{

    public function index()
    
    {
      $databestseller = best_seller::all();
      $data = barang::all();
      return view('admin.best_seller', compact('databestseller','data'));
    }

    public function addbest(Request $r)
    {
      $databestseller = new best_seller();

      $databestseller->id_barang = $r->id_barang;
      $databestseller->deskripsi_best_seller = $r->deskripsi_best_seller;
      $databestseller->save();
      return redirect('admin.best_seller');
    }
}
