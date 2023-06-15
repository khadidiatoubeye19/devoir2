<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\user;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function register(){

        return view('registermedecin');
      }
      public function addmedecin(Request $request)
{
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');
    $email = $request->input('email');
    $nomcentre = $request->input('nomcentre');
    $modepasse = $request->input('motdepasse');
    $telephone = $request->input('telephone');
    $datenaissance = $request->input('datenaissance');

    $medecin = new Medecin();
    $user= new User();
    $user->name = $nom;

    $user->email = $email;
    $user->password = $modepasse;

    $medecin->nom = $nom;
    $medecin->prenom = $prenom;
    $medecin->email = $email;
    $medecin->modepasse = $modepasse;
    $medecin->telephone = $telephone;
    $medecin-> nomcentre= $nomcentre;
    $medecin->datenaissance = $datenaissance;


    // Enregistrer le medecin dans la base de données
    $user->save();
    $medecin->save();

    // Redirection vers une autre page ou affichage d'un message de succès
    return redirect()->route('home')->with('success', 'medecin ajouté avec succès');
}


      public function enregistrer(Request $request){

        $medecin= new medecin();
        request()->validate([
        //   'datedebut'=>'required|date|after:yesterday',
        //   'datefin'=>'required|date|after:datedebut',
      ]);

    $medecin->save();
        return redirect('')
                ->with('message', 'enregistrement avec Succee!');
    }


    public function destroy(Request $request)
      {
        $medecin=medecin::findOrFail($request->idab);

        $medecin->delete();

        return redirect('seancemensuel');
      }

    public function update(Request $request,$id)
      {
        $medecin= medecin::find($id);

        $medecin->update();
        return redirect('');
      }

}
