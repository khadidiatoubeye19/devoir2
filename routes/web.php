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
    return view('welcome');
});
Route::get('/carnet', function () {
    return view('carnet');
});


Route::get('/choixvaccin', function () {
    return view('choixvaccin');
});

Route::get('/accueil', function () {
    return view('accueile');
});
Route::get('/admin', function () {
    return view('admin');
});


Route::get('/registerpatient',  [registerController::class, 'register'])->name('vu');


Route::post('/registerpatient',  [registerController::class, 'addPatient']);
//use App\Http\Controllers\VaccinationController;

Route::get('/choixvaccin', [VaccinationController::class, 'vuchoix']);
Route::post('/choixvaccin', [VaccinationController::class, 'store']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
