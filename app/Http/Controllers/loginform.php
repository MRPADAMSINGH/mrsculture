<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginform extends Controller
{
    public function getdata(Request $req){
        return $req->input();
    }
}


