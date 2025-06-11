<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    //
    public function login(){
        return view('backend.instructor.login.index');
    }
      public function dashboard(){
        return view('backend.instructor.dashboard.index');
    }
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('instructor.login'));
    }
}
