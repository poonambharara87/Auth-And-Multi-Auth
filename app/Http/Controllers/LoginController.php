<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
            
        ]);
        $user = new User;
        $user->name = $request['name'];
        
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('welcome');
        }

    }
    // public function dashboard(){
    //     return view('welcome');
    // }

}
