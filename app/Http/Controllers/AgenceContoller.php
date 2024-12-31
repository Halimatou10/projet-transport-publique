<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenceContoller extends Controller
{
    public function index(){
        return view('forms-agence');
    }
}
