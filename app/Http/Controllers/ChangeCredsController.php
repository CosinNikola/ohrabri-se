<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ChangeCredsController extends Controller
{
    public function getChangeUsername($id){
        $korisnik = User::find($id);
        return view('userProfile/changeUserName')->with('korisnik', $korisnik);
    }

    public function changeUsername(Request $request){
        $korisnici = User::all();
        $user = Auth::user();
        $request->validate([
            'old-name' => 'required|string|min:3',
            'name' => 'required|string|min:3|unique:users'
        ]);
                $user->name = $request->input('name');
                $user->save();
                return redirect('/users'.'/'.auth()->user()->id);
        }

    public function getChangeEmail($id){
        $korisnik = User::find($id);
        return view('userProfile/changeEmail')->with('korisnik', $korisnik);
    }

    public function changeEmail(Request $request){
        $korisnici = User::all();
        $user = Auth::user();
        $request->validate([
            'old-email' => 'required|email',
            'email' => 'required|email|unique:users'
        ]);
                $user->email = $request->input('email');
                $user->save();
                return redirect('/users'.'/'.auth()->user()->id);
        }
    }
