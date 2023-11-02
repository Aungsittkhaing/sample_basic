<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:4",
            "email" => "required|email|unique:students,email",
            "password" => "required|min:6",
            "password_confirmation" => "required|same:password"
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->save();
        return redirect()->route('auth.login')->with('message', 'Register is successfully');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function check(Request $request)
    {
        $request->validate(
            [
                "email" => "required|email|exists:students,email",
                "password" => "required|min:6",

            ],
            [
                "email.exists" => "email or password is required"
            ]
        );
        $student = Student::where('email', $request->email)->first();
        if (!Hash::check($request->password, $student->password)) {
            return redirect()->route('auth.login')->withErrors(["email" => "email or password wrong!"]);
        }
        session(['auth' => $student]);
        return redirect()->route('dashboard.home');
    }
    public function logout()
    {
        session()->forget('auth');
        return redirect()->route('auth.login');
    }
    public function passwordChange()
    {
        return view('auth.change-password');
    }
    public function passwordChanging(Request $request)
    {
        $request->validate([
            "current_password" => "required|min:6",
            "password" => "required|confirmed",
        ]);
        //checking current_password with auth_user_password
        if (!Hash::check($request->current_password, session('auth')->password)) {
            return redirect()->back()->withErrors(['current_password' => 'password does not match']);
        }
        //update new password
        $student = Student::find(session('auth')->id);
        $student->password = Hash::make($request->password);
        $student->update();

        //clear auth session
        session()->forget('auth');
        return redirect()->route('auth.login');
    }
}
