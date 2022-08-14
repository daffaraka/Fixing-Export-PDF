<?php

namespace App\Http\Controllers;
use App\barang;
use App\pesanan;
use App\pesanan_detail;
use App\User;
use Auth;
use Alert;
use Illuminate\Http\Request;

class historyController extends Controller
{

    public function index()
    {
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();

        return view('user.history', compact('pesanan'));
    }

    public function detail($id)
    {
        $data['pesanans'] = pesanan::where('id_pesanan', $id)->first();
        $data['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();

        return view('user.detail', $data);

    }
}