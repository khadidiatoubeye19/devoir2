<?php

namespace App\Http\Controllers;

use App\Models\carnet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CarnetController extends Controller
{
    public function vucarnet(){
    $connectedPatient = Auth::user()->patient;


        $vaccinations = $connectedPatient->vaccinations;
        return view('carnet',compact('vaccinations'));
    }


}
