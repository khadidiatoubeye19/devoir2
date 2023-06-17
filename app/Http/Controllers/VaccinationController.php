<?php

namespace App\Http\Controllers;
use App\Models\Vaccination;
use App\Models\vaccin;
use App\Models\medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccinationController extends Controller
{
    public function vuchoix(){
     $vaccin =Vaccin::all();
     $medecin =medecin::all();
        return view('choixvaccin',compact('vaccin','medecin'));
      }

    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'vaccin_id' => 'required|exists:vaccins,id',
            // 'patient_id' => 'required|exists:patients,id',
            // 'medecin_id' => 'required|exists:medecins,id',
        ]);
        $connectedUser = Auth::user();
        $connectedPatientId = $connectedUser->patient->id;

        $connectedDoctorId = $connectedUser->medecin->id;
        $vaccination = new Vaccination();
        $vaccination->date = $request->date;
        $vaccination->vaccin_id = $request->vaccin_id;
        $vaccination->patient_id =$connectedPatientId;
        $vaccination->medecin_id =$connectedDoctorId;
        $vaccination->status= 0;
        $vaccination->heure = $request->heure;
        $vaccination->save();
//dd(  $connectedPatientId);
        return redirect('accueil')->with('success', 'vaccination ajouté avec succès');

    }
}


