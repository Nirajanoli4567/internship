<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function saveData(Request $request)
    {
        $data = $request->validate([
            'name' => "required",
            'email' => "required|email",
            'password' => "required|confirmed",
        ]);
        $user=User::create($data);
        if($user)
        {
            return redirect()->route('login');
        }
    }
    public function login(Request $request)
    {
        $contents=$request->validate([
            'email'=>"required",
            'password'=>'required',
        ]);
        if(Auth::attempt($contents))
        {
            return redirect()->route('dashboard');
        }

    }
    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }
    }
    public function logout()
    {
Auth::logout();
            return view('welcome');
       
    }

    


}
