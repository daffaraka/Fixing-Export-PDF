<?php

namespace App\Http\Controllers;

use App\pesanan;
use App\pesanan_detail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class pdfController extends Controller
{
    public function getPDF(Request $r)
    {
        $id = pesanan::where('id_pesanan', $r->id)->first();
        $data1 = pesanan::join('pesanan_detail', 'pesanan.id_pesanan', '=', 'pesanan_detail.pesanan_id')
        ->where('pesanan_detail.pesanan_id', $id)
        ->get();
        //$data1['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();
      

        $pdf= Pdf::loadview('admin.pesanan',['pesanan'=>$data1]);
        return $pdf->download('bukti.pdf');

    }
    public function viewPdf($id)
    {
        // $id = pesanan::where('id_pesanan', $r->id)->first();
        // $data1 = pesanan::join('pesanan_detail', 'pesanan.id_pesanan', '=', 'pesanan_detail.pesanan_id')
        // ->where('pesanan_detail.pesanan_id', $id)
        // ->get();
        //$data1['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();
      
        $data['pesanans'] = pesanan::where('id_pesanan', $id)->first();
        $data['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();

        // dd($data);
        $pdf= Pdf::loadview('admin.pesanan-pdf',$data);
        return $pdf->stream('bukti-pesanan.pdf');
    }

    public function pdfUser($id)
    {
            $data['pesanans'] = pesanan::where('id_pesanan', $id)->first();
            $data['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();
    
            $pdf= Pdf::loadview('user.user-pesanan-pdf',$data);
            return $pdf->stream('bukti-pesanan-user.pdf');
    }
}
