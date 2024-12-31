<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class CarouselContoller extends Controller
{
    public function index(){
        return view('components-carousel');
    }


    public function ajouterElement()
    {
        $element = new NomDuModèle();
        $element->nom_colonne = 'Valeur';
        $element->save();
    }
}
