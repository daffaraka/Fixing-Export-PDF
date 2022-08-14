<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class pelangganController extends Controller
{
    public function index()
    
    {
      $data = User::all();
      return view('admin.pelanggan', compact('data'));
    }
    public function delete(Request $id)
    {
        $delete = User::where('id', $id->id);
        $delete->delete();
        return redirect()->back();

}
}
