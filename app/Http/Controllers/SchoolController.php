<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    public function SchoolAddress(Request $r)
    {
        // return $r;
        $data = $r->session()->all();
        return response()->json($data);
    }
}
