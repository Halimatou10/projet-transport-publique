<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainContoller extends Controller
{
    public function index(){
        return view('forms-train');
    }
}
