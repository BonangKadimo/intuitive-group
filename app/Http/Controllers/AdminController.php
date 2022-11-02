<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
class AdminController extends Controller
{
    public function doctor_crud(){
       
        return view('admin.admin_doctor');
        
    }
    public function patient_crud(){
        return view('admin.admin_patient');
    }
    public function show_doctors(){
        $data = doctor::all();
        return view('admin.admin_doctor', compact('data'));
    }
    public function show_patients(){
        $data = patient::all();
        return view('admin.admin_patient', compact('data'));
    }
    
    public function upload(Request $request){
        $doctor = new doctor;
        $doctor->name=$request->doctor_name;
        $doctor->phone_number=$request->phone_number;
        $doctor->patient_type=$request->patient_type;
        $doctor->room_number=$request->room_number;

        $doctor->save();
        return redirect()->back();
    }
    public function upload_patient(Request $request){
        $patient = new patient;
        $patient->_patient_name=$request->_patient_name;
        $patient->phone_number=$request->phone_number;
        $patient->patient_type=$request->patient_type;
        $patient->room_number=$request->room_number;

        $patient->save();
        return redirect()->back();
    }
    public function delete_doctor($id){
        $data=doctor::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function delete_patient($id){
        $data=patient::find($id);
        $data->delete();

        return redirect()->back();
    }
}

