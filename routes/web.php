<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::match(["post","get"],"/patientLogin",[PublicController::class,"patientLogin"])->name("patientLogin");
Route::match(["post","get"],"/patientSingup",[PublicController::class,"patientSingup"])->name("patientSingup");
Route::match(["post","get"],"/doctorSingup",[PublicController::class,"doctorSingup"])->name("doctorSingup");
Route::match(["post","get"],"/doctorLogin",[PublicController::class,"doctorLogin"])->name("doctorLogin");

Route::middleware("auth:doctor")->group(function(){
    Route::get("doctor/dashboard",[PublicController::class,"doctorDashboard"])->name("doctor.index");
    Route::get("doctor/logout",[PublicController::class,"doctorLogout"])->name("doctor.logout");
});
Route::middleware("auth:patient")->group(function(){
    Route::get("patient/dashboard",[PublicController::class,"patientDashboard"])->name("patient.index");
    Route::get("patient/logout",[PublicController::class,"patientLogout"])->name("patient.logout");
});

