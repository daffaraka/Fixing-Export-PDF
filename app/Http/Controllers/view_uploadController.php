<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\upload;

class view_uploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $data = upload::paginate(20);
        return view('admin.view_upload',compact('data')); 
    }

    public function delete(Request $id)
    {
        $delete = upload::where('id', $id->id);
        $delete->delete();

        // alert()->success('Success Message', 'Optional Title');
        return redirect()->back();
    }
}
