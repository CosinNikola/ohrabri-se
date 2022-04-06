<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Auth;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    function changePasswordGet(){
        return view('userProfile/changePassword');
    }

    function changePasswordPut(Request $request){
        $user = Auth::user();
        $message = '';
        if($request->input('old-password') === "" || $request->input('new-password') === "" || $request->input('confirm-password') === ""){
            redirect()->back()->with("error","Sva polja su obavezna!");
        }
        if(!(Hash::check($request->input('old-password'), $user->password))){
            redirect()->back()->with("error","Trenutna lozinka neispravna!");
        }   

        if($request->input('old-password') != "" && $request->input('new-password') != "" && $request->input('old-password') === $request->input('new-password')){
            redirect()->back()->with("error", "Stara i nova lozinka ne mogu biti iste!");
        }
        $request->validate([
            'old-password' => 'required|different:new-password',
            'new-password' => 'required|min:8',
            'confirm-password' => 'required|same:new-password'
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->input('new-password'));
        $user->save();
        $message = 'Promena lozinke uspešna!';
        return redirect('/users'.'/'.auth()->user()->id)->with('uspesno', $message);
    }
}

