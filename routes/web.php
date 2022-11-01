<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;

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
    return view('landing');
});

Route::get('home',function(){
    return view('landing');
});
route::get('/redirects', [HomeController::class, "index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//i am trying things out
Route::get('/doctorappointment',[DoctorController::class,'doctorappointment'])->name('home.doctorappointment');
Route::get('/doctorschedule',[DoctorController::class,'doctorschedule'])->name('home.doctorschedule'); 
Route::get('/doctorpatientmanagement',[DoctorController::class,'doctorpatientmanagement'])->name('home.doctorpatientmanagement'); 
Route::get('/doctorpatienthistory',[DoctorController::class,'doctorpatienthistory'])->name('home.doctorpatienthistory'); 
Route::get('/doctorpatientprescription',[DoctorController::class,'doctorpatientprescription'])->name('home.doctorpatientprescription');
Route::get('/dischargepatients',[DoctorController::class,'dischargepatients'])->name('home.dischargepatients');
Route::get('/doctor',[DoctorController::class,'doctor'])->name('home.doctor');

