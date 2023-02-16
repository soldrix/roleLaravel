<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::findById(Auth::user()->id_role);

        return view('home',['role' => $role]);
    }

    public function login(Request $request)
    {
        if(Auth::guard()->attempt($request->only('email','password'))){
            $request->session()->regenerate();
            return redirect('/home');
        }
        return back();
    }


    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::guard()->logout();
        return redirect('/login');
    }
    public function testRole()
    {
        $role = Role::findById(Auth::user()->id_role);

        return view('verifRolePage',['role' => $role]);
    }
}
