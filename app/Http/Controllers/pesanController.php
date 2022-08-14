<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesan;
class pesanController extends Controller
{
    public function index()
    
    {
     
      return view('user.contact');
    }
    public function store(Request $r)
     {

      $data = new pesan();
      $data->nama_pesan= $r->nama_pesan;
      $data->wa_pesan= $r->wa_pesan;
      $data->email_pesan= $r->email_pesan;
      $data->isi_pesan= $r->isi_pesan;

 
        
        $data->save();

      return redirect()->back(); 
     }
}
