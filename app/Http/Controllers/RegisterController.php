<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role as SpatieRole;
use App\Models\patient;
use Spatie\Permission\Models\Role;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){

        return view('registerpatient');
      }
      public function addPatient(Request $request)
{


    $name = $request->input('name');
    $prenom = $request->input('prenom');
    $email = $request->input('email');
    $password  =  bcrypt($request->input('password'));
    $telephone = $request->input('telephone');
    $datenaissance = $request->input('datenaissance');

    //$password = bcrypt($request['password']);
    $user= new User();
    $user->name = $name;

    $user->email = $email;
    $user->password = $password;
    $role = Role::where('name', 'user')->first();
    $user->assignRole($role);
    $patient = new Patient();
    $patient->nom = $name;
    $patient->prenom = $prenom;
    $patient->email = $email;
    $patient->modepasse = $password ;
    $patient->telephone = $telephone;
    $patient->datenaissance = $datenaissance;

    // Enregistrer le patient dans la base de données
    $user->save();
    $patient->save();

    // Redirection vers une autre page ou affichage d'un message de succès
    return redirect()->route('home')->with('success', 'Patient ajouté avec succès');
}


      public function enregistrer(Request $request){

        $patient= new patient();
        request()->validate([
        //   'datedebut'=>'required|date|after:yesterday',
        //   'datefin'=>'required|date|after:datedebut',
      ]);

    $patient->save();
        return redirect('')
                ->with('message', 'enregistrement avec Succee!');
    }


    public function destroy(Request $request)
      {
        $patient=patient::findOrFail($request->idab);

        $patient->delete();

        return redirect('seancemensuel');
      }

    public function update(Request $request,$id)
      {
        $patient= patient::find($id);

        $patient->update();
        return redirect('');
      }
      public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //if (Auth::guard('web')->attempt($credentials)) {
            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();

                return 'bonsoir';
            }

        //  else {
        //     return 'bonjour';
        // }
    }

}
