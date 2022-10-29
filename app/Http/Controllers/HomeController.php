<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        
        if($role=='1'){
            return view('office_assistant');
        }
        if($role=='2'){
            return view('doctor');
        }
        else{
            return view ('dashboard');
        }
        
    }
}
