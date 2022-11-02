<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientappointment(){
        return view('patientappointment');
    }
    public function patientdoctor(){
        return view('patientdoctor');   
    }
    public function patientPrescription(){
        return view('patientPrescription');   
    }
    public function patientpayment(){
        return view('patientpayment');   
    }
    public function patient(){
        return view('patient');   
    }
}
