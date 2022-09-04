<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use Auth;

class PublicController extends Controller
{
    public function index(){
        return view("index");
    }
    public function patientLogin(Request $request){
        if($request->isMethod("post")){
            $auth = $request->only("email","password");
            if(Auth::guard("patient")->attempt($auth)){
                return redirect()->route("patient.index");
            }
        }
        return view("patientLogin");
    }
    public function patientSingup(Request $request){
        if($request->isMethod("post")){
            $data = $request->validate([
                'name' => 'required',
                'contact' => 'required',
                'address' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            Patient::create($data);
            return redirect()->back();
        }
        return view("patientSingup");
    }
    public function doctorLogin(Request $request){
        if($request->isMethod("post")){
            $auth = $request->only("email","password");
            if(Auth::guard("doctor")->attempt($auth)){
                return redirect()->route("doctor.index");
            }
        }
        return view("doctorLogin");
    }
    public function doctorSingup(Request $request){
        if($request->isMethod("post")){
            $data = $request->validate([
                'name' => 'required',
                'contact' => 'required',
                'address' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            Doctor::create($data);
            return redirect()->back();
        }
        return view("doctorSingup");
    }
    public function doctorLogout(){
        Auth::guard("doctor")->logout();
        return redirect()->route("doctorLogin");
    }
    public function doctorDashboard(){
        return view("doctorDashboard");
    }
    public function patientDashboard(){
        return view("patientDashboard");
    }
}
