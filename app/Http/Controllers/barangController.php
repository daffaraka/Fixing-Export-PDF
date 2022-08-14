<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class barangController extends Controller
{
    public function index()
    
    {
      $data = barang::all();
      return view('admin.barang', compact('data'));
    }
    public function store(Request $r)
     {

      $data = new barang();
      $data->nama_barang= $r->nama_barang;
      $data->harga_barang= $r->harga_barang;
      $data->jumlah= $r->jumlah;
      $data->deskripsi= $r->deskripsi;
      $data->material= $r->material;
      $data->berat= $r->berat;
      $data->kategori= $r->kategori;
 
        $destinationPath="img";
        $file = $r->image1;
        $extension = $file->getClientOriginalExtension();
        $fileName1 = 'produk-'.rand(11111,99999).'.'.$extension;
        $file->move($destinationPath,$fileName1);

        
        $file2 = $r->image2;
        $extension = $file->getClientOriginalExtension();
        $fileName2 = 'produk-'.rand(11111,99999).'.'.$extension;
        $file2->move($destinationPath,$fileName2);

        
        $file3 = $r->image3;
        $extension = $file->getClientOriginalExtension();
        $fileName3 = 'produk-'.rand(11111,99999).'.'.$extension;
        $file3->move($destinationPath,$fileName3);

        $data->image1 = $fileName1;
        $data->image2 = $fileName2;
        $data->image3 = $fileName3;
        $data->save();

      return redirect()->back(); 
     }
     public function delete(Request $id_barang)
    {
        $delete = barang::where('id_barang', $id_barang->id_barang);
        $delete->delete();
        return redirect()->back();

}
public function update(Request $r)
{
  if ($r->hasFile('image1')) {
    $destinationPath1="img";
    $file1 = $r->image1;
    $extension1 = $file1->getClientOriginalExtension();
    $fileName1 = 'produk-'.rand(11111,99999).'.'.$extension1;
    $file1->move($destinationPath1,$fileName1);
    if ($r->old_logo1 == '') {
    }else{
      unlink($destinationPath1.'/'.$r->old_logo1);
    }
    $oldgambar1 = $fileName1;
  }else{
    $oldgambar1 = $r->old_logo1;
  }

  if ($r->hasFile('image2')) {
    $destinationPath2="img";
    $file2 = $r->image2;
    $extension2 = $file2->getClientOriginalExtension();
    $fileName2 = 'produk-'.rand(11111,99999).'.'.$extension2;
    $file2->move($destinationPath2,$fileName2);
    if ($r->old_logo2 == '') {
    }else{
      unlink($destinationPath2.'/'.$r->old_logo2);
    }
    $oldgambar2 = $fileName2;
  }else{
    $oldgambar2 = $r->old_logo2;
  }

  if ($r->hasFile('image3')) {
    $destinationPath3="img";
    $file3 = $r->image3;
    $extension3 = $file3->getClientOriginalExtension();
    $fileName3 = 'produk-'.rand(11111,99999).'.'.$extension3;
    $file3->move($destinationPath3,$fileName3);
    if ($r->old_logo3 == '') {
    }else{
      unlink($destinationPath3.'/'.$r->old_logo3);
    }
    $oldgambar3 = $fileName3;
  }else{
    $oldgambar3 = $r->old_logo3;
  }

    $data = array(
    
    'nama_barang' => $r->nama_barang,
    'kategori' => $r->kategori,
    'harga_barang' => $r->harga_barang,
    'jumlah' => $r->jumlah,
    'image1' => $oldgambar1,
    'image2' => $oldgambar2,
    'image3' => $oldgambar3,
    'deskripsi' => $r->deskripsi,
    'material' => $r->material,
    'berat' => $r->berat);
    barang::where('id_barang',$r->ids)->update($data);
    return redirect()->back();
 }
}
