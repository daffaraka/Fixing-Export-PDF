<?php

namespace App\Http\Controllers;
use App\upload;
use Auth;
use Illuminate\Http\Request;

class uploadController extends Controller
{

    public function index()
    {
    return view('user.upload'); //admin depan buat nama folder, barang belakang buat namefile
    }

    public function store(Request $r)
    {
        $data = new upload();

      $destinationPath="img";
      $file = $r->image;
      $extension = $file->getClientOriginalExtension();
      $fileName = 'upload-'.rand(11111,99999).'.'.$extension; //buat pindah random img asli jadi barang-random angka
      $file->move($destinationPath,$fileName);

      $data->image = $fileName;
      $data->nama = $r->nama;
      $data->total = $r->total;
      $data->id_user = Auth::user()->id;
      $data->save();

      
      return redirect('dashboard');
    }

}
