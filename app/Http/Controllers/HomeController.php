<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    //

    public function index()
    {
       $role=Auth::user()->role;

       if($role =='1'){
        return view('Admin.admin');
       }
       if($role =='2'){
        return view('Doctor.doctor');
       }
       else
       {
        return view('dashboard');
       }
    }

    //Admin add doctor
    public function addoctor(Request $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->password= Hash::make($request->password);
        $user->role='2';
        $user->save();
        return redirect()->back();
    }
}
