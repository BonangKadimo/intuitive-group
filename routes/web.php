<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
<<<<<<< Updated upstream
=======

//i am trying things out
Route::get('/doctorappointment',[DoctorController::class,'doctorappointment'])->name('home.doctorappointment');
Route::get('/doctorschedule',[DoctorController::class,'doctorschedule'])->name('home.doctorschedule'); 
Route::get('/doctorpatientmanagement',[DoctorController::class,'doctorpatientmanagement'])->name('home.doctorpatientmanagement'); 
Route::get('/doctorpatienthistory',[DoctorController::class,'doctorpatienthistory'])->name('home.doctorpatienthistory'); 
Route::get('/doctorpatientprescription',[DoctorController::class,'doctorpatientprescription'])->name('home.doctorpatientprescription');
Route::get('/dischargepatients',[DoctorController::class,'dischargepatients'])->name('home.dischargepatients');
Route::get('/doctor',[DoctorController::class,'doctor'])->name('home.doctor');

Route::get('/patientappointment',[PatientController::class,'patientappointment'])->name('home.patientappointment');
Route::get('/patientdoctor',[PatientController::class,'patientdoctor'])->name('home.patientdoctor'); 
Route::get('/patientPrescription',[PatientController::class,'patientPrescription'])->name('home.patientPrescription'); 
Route::get('/patientpayment',[PatientController::class,'patientpayment'])->name('home.patientpayment'); 
Route::get('/patient',[PatientController::class,'patient'])->name('home.patient');

Route::get('/officeAassistant',[OfficeController::class,'officeAssistant/Demo1/office-assistant'])->name('office-assistant');
Route::get('/patientdoctor',[PatientController::class,'patientdoctor'])->name('home.patientdoctor'); 
Route::get('/patientPrescription',[PatientController::class,'patientPrescription'])->name('home.patientPrescription'); 
Route::get('/patientpayment',[PatientController::class,'patientpayment'])->name('home.patientpayment'); 
Route::get('/patient',[PatientController::class,'patient'])->name('home.patient');
//Controller for admin -> doctor interaction
Route::get('/admin_doctor', [AdminController::class, 'doctor_crud']);
Route::get('/admin_doctor', [AdminController::class, 'show_doctors']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::get('delete_doctor/{id}', [AdminController::class, 'delete_doctor']);
//Controller for admin -> patient interaction 
Route::get('/admin_patient', [AdminController::class, 'patient_crud']);
Route::get('/admin_patient', [AdminController::class, 'show_patients']);
Route::post('/upload_patient', [AdminController::class, 'upload_patient']);
Route::get('/delete_patient/{id}', [AdminController::class, 'delete_patient']);
//Controller for admin -> office_assistant interaction
Route::get('/admin_office_assistant', [AdminController::class, 'office_assistant_crud']);
Route::get('/admin_office_assistant', [AdminController::class, 'show_office_assistant']);
Route::post('/upload_office_assistant', [AdminController::class, 'upload_office_assistant']);
Route::get('/delete_office_assistant{id}', [AdminController::class, 'delete_office_assistant']);
>>>>>>> Stashed changes
