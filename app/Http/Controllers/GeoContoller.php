<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoContoller extends Controller
{
    public function index(){
        return view('geo');
    }
}
