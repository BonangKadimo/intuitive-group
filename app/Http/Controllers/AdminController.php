<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Office_Assistant;
class AdminController extends Controller
{
    public function doctor_crud(){
       
        return view('admin.admin_doctor');
        
    }
    public function patient_crud(){
        return view('admin.admin_patient');
    }
    public function office_assistant_crud(){
        return view('admin.admin_office_assistant');
    }
    
    //index doctors
    public function show_doctors(){
        $data = doctor::all();
        return view('admin.admin_doctor', compact('data'));
    }
    //index patients
    public function show_patients(){
        $data = patient::all();
        return view('admin.admin_patient', compact('data'));
    }
    //index office assistants
    public function show_office_assistant(){
        $data = office_assistant::all();
        return view('admin.admin_office_assistant', compact('data'));
    }
    
    public function upload(Request $request){
        $doctor = new doctor;
        $doctor->name=$request->doctor_name;
        $doctor->email=$request->email;
        $doctor->department=$request->department;
        $doctor->room=$request->room;

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
    public function upload_office_assistant(Request $request){
        $office_assistant = new office_assistant;
        $office_assistant->name=$request->name;
        $office_assistant->assigned_doctor=$request->assigned_doctor;
        

        $office_assistant->save();
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
    public function delete_office_assistant($id){
        $data=office_assistant::find($id);
        $data->delete();

        return redirect()->back();
    }
}

