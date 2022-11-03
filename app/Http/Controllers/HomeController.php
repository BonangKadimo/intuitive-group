<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->role=='0'){
                return view('patient');
            }
            elseif(Auth::user()->role=='1'){
                return view('office_assistant');
            }
            elseif(Auth::user()->role=='2'){
                return view('doctor');
            }
            elseif(Auth::user()->role=='3'){
                return view('admin.admin_dashboard');
            }
        }
        
    }
    public function index(){
        return view('landing');
    }
}
