<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\pesanan;
use App\pesanan_detail;
use App\User;
use Auth;

class pesanan_adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanan = User::join('pesanan', 'users.id', '=', 'pesanan.user_id')
                    ->join('pesanan_detail', 'pesanan.id_pesanan', '=', 'pesanan_detail.pesanan_id')
                    ->get();
        return view('admin.pesanan', compact('pesanan'));

        $data = User::paginate(20);
        $data = pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        return view('admin.pesanan',compact('data')); 
    }

    public function delete(Request $id)
    {
        $delete = User::where('id', $id->id);
        $delete->delete();
        return redirect('/pesanan');
    }

        public function update(Request $r)
    {

        $data = array(
        'status' => $r->status);
        pesanan::where('id_pesanan',$r->ids)->update($data);
        return redirect('/pesanan');
     }

     public function detail($id)
    {
        $data['pesanans'] = pesanan::where('id_pesanan', $id)->first();
        $data['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();

        
        return view('admin.detailadmin', $data);

    }
}
