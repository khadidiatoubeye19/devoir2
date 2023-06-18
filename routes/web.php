<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('log');
});


// Route::get('/choixvaccin', function () {
//     return view('choixvaccin');
// });

Route::get('/accueil', function () {
    return view('accueile');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/registerpatient',  [registerController::class, 'register'])->name('vu')->middleware('checkUserRolePatient');

Route::get('/mede', [MedecinController::class, 'homemedecin'])->middleware('checkUserRoleMedecin');
Route::post('/registerpatient',  [registerController::class, 'addPatient']);
Route::post('/addmedecin',  [MedecinController::class, 'addmedecin']);
//use App\Http\Controllers\VaccinationController;

Route::get('/choixvaccin', [VaccinationController::class, 'vuchoix']);
Route::post('/choixvaccin', [VaccinationController::class, 'store']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/carnet', [CarnetController::class, 'vucarnet'])->name('carnet')->middleware('checkUserRolePatient');

Route::get('/listepatient', [MedecinController::class, 'listepatient'])->middleware('checkUserRoleMedecin');

Route::put('/vaccination/{id}/confirmer',[MedecinController::class,'confirmerVaccination'])->name('confirmerVaccination');

Route::get('/carnet/{patient}', [MedecinController::class, 'show'])->name('carnet.show')->middleware('checkUserRoleMatient');
Route::get('/logout',[RegisterController::class, 'logout'])->name('logout');
route::get('/listevaccination', [VaccinationController::class, 'liste']);
