<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doktor;
use App\Models\Iskustva;
use App\Models\User;
use App\Models\Pitanje;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDoktori(){
        $doktori = Doktor::all();
        return view('adminPages/adminDoktori')->with('doktori', $doktori);
    }

    public function getIskustva(){
        $iskustva = Iskustva::all();
        return view('adminPages/adminIskustva')->with('iskustva', $iskustva);
    }

    public function getPitanja(){
        $pitanja = Pitanje::all();
        return view('adminPages/adminPitanja')->with('pitanja', $pitanja);
    }

    public function editKorisnik(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required'
        ]);
        $korisnik = User::find($id);
        $korisnik->name = $request->input('ime');
        $korisnik->email = $request->input('email');
        $korisnik->role_id = $request->input('roleID');
        $korisnik->save();
        return redirect('/admin/korisnici');
    }

    public function editKorisnikView($id){
        $korisnik = User::find($id);
        return view('/adminPages/korisniciViews/updateKorisnik')->with('korisnik', $korisnik);
    }

    public function createKorisnik(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role_id' => 'required'
        ]);
        $korisnik = new User;
        $korisnik->name = $request->input('name');
        $korisnik->email = $request->input('email');
        $korisnik->role_id = $request->input('roleID');
        $korisnik->password = bcrypt($request->input('password'));
        $korisnik->save();
        return redirect('admin/korisnici');
    }

    public function createDoktor(Request $request){
        $request->validate([
            'ime' => 'required',
            'prezime' => 'required',
            'specijalizacija' => 'required',
            'email' => 'required|email',
            'brTel' => 'required'
        ]);
        $doktor = new Doktor;
        $doktor->ime = $request->input('ime');
        $doktor->prezime = $request->input('prezime');
        $doktor->specijalizacija = $request->input('specijalizacija');
        $doktor->slika = $request->input('slika');
        $doktor->email = $request->input('email');
        $doktor->brTel = $request->input('brTel');
        $doktor->save();
        return redirect('admin/doktori');
    }
    public function updateDoktorView($id){
        $doktor = Doktor::find($id);
        return view('adminPages/updateDoktor')->with('doktor', $doktor);
    }
    
    public function updateDoktor(Request $request, $id){
        $request->validate([
            'ime' => 'required',
            'prezime' => 'required',
            'specijalizacija' => 'required',
            'email' => 'required|email',
            'brTel' => 'required'
        ]);
        $doktor = Doktor::find($id);
        $doktor->ime = $request->input('ime');
        $doktor->prezime = $request->input('prezime');
        $doktor->specijalizacija = $request->input('specijalizacija');
        $doktor->slika = $request->input('slika');
        $doktor->email = $request->input('email');
        $doktor->brTel = $request->input('brTel');
        $doktor->save();
        return redirect('admin/doktori');
    }

    public function deleteIskustvo($id){
        $iskustvo = Iskustva::find($id);
        $iskustvo->delete();
        return redirect('/admin/iskustva');
    }
    public function deletePitanje($id){
        $pitanje = Pitanje::find($id);
        $pitanje->delete();
        return redirect('/admin/pitanja');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
