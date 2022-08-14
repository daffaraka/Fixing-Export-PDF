<?php

namespace App\Http\Controllers;

use App\barang;
use App\pesanan;
use App\pesanan_detail;
use App\User;
use App\produkDipesan;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class shopping_cartController extends Controller
{
    public function index($id_barang)
    {

        $data = barang::where('id_barang',$id_barang)->first();
        return view('user.shopping_cart', compact('data')); 
    }

    public function store(Request $request, $id_barang)
    {
    
        $data = barang::where('id_barang', $id_barang)->first();
        $tanggal = Carbon::now();

        //validasi apakah melebihi stock
        if($request->jumlah_pesan > $data->jumlah)
        {
            return redirect('shopping_cart/'.$id_barang);
        }

        //cek validasi
        $cek_pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //simpan ke database pesanan
        if(empty($cek_pesanan))
        {
            $pesanan = new pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->kode = mt_rand(100,999);
            $pesanan->berat_produk = 0;
            $pesanan->save();
        }


        //simpan ke database pesanan_detail
        $pesanan_baru = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $cek_pesanan_detail = pesanan_detail::where('produk_id', $data->id_barang)->where('pesanan_id', $pesanan_baru->id_pesanan)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new pesanan_detail;
            $pesanan_detail->produk_id = $data->id_barang;
            $pesanan_detail->pesanan_id = $pesanan_baru->id_pesanan;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->berat_produk = $data->berat*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $data->harga_barang*$request->jumlah_pesan;
            $pesanan_detail->save();
            
            
            $barang = barang::find($data->id_barang);
            $barang->jumlah = $barang->jumlah-$request->jumlah_pesan;
            $barang->update();
            
        }
        else
        {
            $pesanan_detail = pesanan_detail::where('produk_id', $data->id_barang)->where('pesanan_id', $pesanan_baru->id_pesanan)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;
            
            $barang = barang::find($data->id_barang);
            $barang->jumlah = $barang->jumlah-$request->jumlah_pesan;
            $barang->update();

            //harga sekarang
            $harga_pesanan_detail_baru = $data->harga_barang*$request->jumlah_pesan;
            $berat_pesanan_baru = $data->berat*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->berat_produk = $pesanan_detail->berat_produk+$berat_pesanan_baru;
            $pesanan_detail->update();
        }

        //jumlah total
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$data->harga_barang*$request->jumlah_pesan;
        $pesanan->berat_produk = $pesanan->berat_produk+$data->berat*$request->jumlah_pesan;
        $pesanan->update();

        return redirect('shop'); 
    }

    public function check_out()
    {
        $data['pesanan'] = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(!empty($data['pesanan']))
        {
            $data['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanan']->id_pesanan)->get();
        }        
        return view('user.shopping_cart', $data);
    }


    public function delete($id)
    {
        $pesanan_detail = pesanan_detail::where('id_pesanan_detail', $id)->first();

        $pesanan = pesanan::where('id_pesanan', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();
        
        return redirect('shopping_cart')->with('success', 'Berhasil Dihapus');
    }

    public function konfirmasi(Request $r)
    {
        $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status =1;
        $pesanan->update();

        $datapd = new produkDipesan();

      $datapd->name_pd = $r->name_pd;
      $datapd->tlp_pd = $r->tlp_pd;
      $datapd->email_pd = $r->email_pd;
      $datapd->provinsi_pd = $r->province_id;
      $datapd->kota_pd = $r->kota_id;
      $datapd->ekspedisi_pd = $r->kurir;
      $datapd->berat_pd = $r->weight;
      $datapd->alamat_pd = $r->address;
      $datapd->kode_pos_pd = $r->kode_pos_pd;
      $datapd->subtotal_pd = $r->subtotal_pd;
      $datapd->total_ongkir_pd = $r->total_ongkir_pd;
      $datapd->total_belanja_pd = $r->total_belanja_pd;
      $datapd->tanggal_pd = $r->tanggal_pd;
      $datapd->pesan_pd = $r->pesan_pd;

    //   dd($datapd);
      $datapd->save();

        return redirect('/shop')->with('success', 'Berhasil Dibeli');
    }

}
