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
        elseif($role=='2'){
            return view('doctor');
        }
        elseif($role =='3'){
            return view('admin');
        }

        else{
            return view ('patient');
        }
        
    }
}
