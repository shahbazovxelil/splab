<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function  login(){

         return view('admin.auth.login');

     }

     public function  loginpost(Request $request){

         if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
             return redirect()->route('admin.index');
         }

         else{

             return  redirect()->route('admin.login')->withErrors('Email adresi və ya şifrə yalnışdır');
         }


     }

     public  function  logout(){
         Auth::logout();
         return redirect()->route('admin.login');
     }
}
