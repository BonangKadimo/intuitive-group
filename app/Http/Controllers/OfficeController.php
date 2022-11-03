<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //

    public function officerpatientinvoice(){
        return view('officerpatientinvoice');
    }
    public function office_assistant(){
        return view('office_assistant');
    }
    public function officerdoctor(){
        return view('officerdoctor');
    }
    public function officerappointment(){
        return view('officerappointment');
    }
    public function officerprescription(){
        return view('officerprescription');
    }
    public function officerdoctorschedule(){
        return view('officerdoctorschedule');
    }
}
