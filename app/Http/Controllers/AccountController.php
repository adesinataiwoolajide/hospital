<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }   

    public function userlogin(Request $request)
    {
        $data = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];
        if(Auth::attempt($data)){
            $usertype = Auth::user()->is_admin;
            if($usertype == "Super Admin"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("superadmin.dashboard");
            }elseif($usertype == "CMD"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("cmd.dashboard");
            }elseif($usertype == "Doctor"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("cmd.dashboard");
            }elseif($usertype == "Laboratory"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("laboratory.dashboard");
            }elseif($usertype == "Nurse"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("nurse.dashboard");
            }elseif($usertype == "Pharmacy"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("pharmacy.dashboard");
            }elseif($usertype == "Account"){
                $request->session()->flash('success', 'Login successfully');
                return redirect()->route("account.dashboard");
            }else{
                $message = "Invalid User " ;
                return redirect()->back()->with("error", $message);
            }
        }else{
            $message = "Invalid User Name or Password" ;
            return redirect()->back()->with("error", $message);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return view("auth.login");
    }
}
