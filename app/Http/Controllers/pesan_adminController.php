<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesan;
class pesan_adminController extends Controller
{
    public function index()
    
    {
      $data = pesan::all();
      return view('admin.pesan', compact('data'));
    }
}
