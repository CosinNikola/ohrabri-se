<?php

namespace App\Http\Controllers;

use App\Models\Doktor;
use App\Models\Iskustva;
use App\Models\Pitanje;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
            $pitanje = Pitanje::all()->last();
            $iskustvo = Iskustva::all()->last();
            $doktori = Doktor::all();
            return view('home')->with('pitanje', $pitanje)->with('iskustvo', $iskustvo)->with('doktori', $doktori);
    }
    public function iskustva(){
        return view('iskustva/iskustva');
    }
    public function login(){
        return view('login/login');
    }
    public function register(){
        return view('register/register');
    }
    public function admin(){
        return view('adminPages/dashboard');
    }
}
