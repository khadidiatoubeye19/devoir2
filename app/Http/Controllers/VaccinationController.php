<?php

namespace App\Http\Controllers;
use App\Models\Vaccination;
use App\Models\vaccin;
use App\Models\medecin;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    public function vuchoix(){
     $vaccin =Vaccin::all();
     $medecin =Medecin::all();
        return view('choixvaccin',compact('vaccin','medecin'));
      }

    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'date' => 'required|date',
        //     'vaccin_id' => 'required|exists:vaccins,id',
        //     'patient_id' => 'required|exists:patients,id',
        //     'medecin_id' => 'required|exists:medecins,id',
        // ]);
        $vaccination = new Vaccination();
        $vaccination->date = $request->date;
        $vaccination->vaccin_id = $request->vaccin_id;
        $vaccination->patient_id = $request->patient_id;
        $vaccination->medecin_id = $request->medecin_id;
        $vaccination->status= 0;
        $vaccination->save();

        return redirect()->route('cernet')->with('success', 'vaccination ajouté avec succès');

    }
}


