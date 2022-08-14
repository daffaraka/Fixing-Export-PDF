<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ongkirController extends Controller
{
    public function index()
    
    {
        return view ('user.checkout');
    }
}
