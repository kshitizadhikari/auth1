<?php

namespace App\Http\Controllers;
use App\Models\UserM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserMController extends Controller
{
    public function signupUser(Request $request){
        
        // dd($request->all()); CHECK IF  THE DATA IS COMING OR NOT

        $request->validate([
            'username' => 'required|unique:user_m_s',
            'email' => 'required|unique:user_m_s',
            'password' =>  'required',
        ]);
        UserM::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('loginView');
    }

    public function loginUser(Request $request){
        
        $request->validate([
            // 'username' => 'required',
            'email' => 'required',
            'password' =>  'required',
        ]);
        
        // dd($request->all());

        // if(Auth::attempt(['Email' => $request->email, 'Password' => $request->password])){
        if(Auth::attempt($request->only('email', 'password'))) {
            dd('user logged in');
        } else {
            dd('user not found');
        }
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('login');
    }

}