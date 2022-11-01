<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctorappointment(){
        return view('doctorappointment');
    }
    public function doctorpatientmanagement(){
        return view('doctorpatientmanagement');   
    }
    public function doctorpatientprescription(){
        return view('doctorpatientprescription');   
    }
    public function dischargepatients(){
        return view('dischargepatients');   
    }
    public function doctorschedule(){
        return view('doctorschedule');   
    }
    public function doctorpatienthistory(){
        return view('doctorpatienthistory');   
    }
    public function doctor(){
        return view('doctor');
    }
}
