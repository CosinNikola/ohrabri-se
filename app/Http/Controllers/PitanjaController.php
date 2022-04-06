<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pitanje;
use App\Models\User;

class PitanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pitanja = Pitanje::orderBy('id','desc')->paginate(3);
        return view('pitanja/pitanja')->with('pitanja', $pitanja);
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
        $request->validate([
            'naslov' => 'required',
            'sadrzaj' => 'required'
        ]);
        $pitanje = new Pitanje;
        $pitanje->id_autora = auth()->user()->id;
        $pitanje->ime_autora = auth()->user()->name;
        $pitanje->naslov = $request->input('naslov');
        $pitanje->sadrzaj = $request->input('sadrzaj');
        $pitanje->save();
        return redirect('/pitanja');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pitanje = Pitanje::find($id);
        return view('pitanja/jednoPitanje')->with('pitanje', $pitanje);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pitanje = Pitanje::find($id);
        return view('pitanja/jednoPitanje')->with('pitanje', $pitanje);
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
        $pitanje = Pitanje::find($id);
        $pitanje->imeDoktora = auth()->user()->name;
        $pitanje->sadrzajOdgovora = $request->input('sadrzajOdgovora');
        $pitanje->save();
        return redirect('pitanja');
    }
    public function findPitanje($id){
        $pitanje = Pitanje::find($id);
        return view('pitanja/editPitanje')->with('pitanje', $pitanje);
    }
    public function updatePitanje(Request $request, $id)
    {
        $pitanje = Pitanje::find($id);
        $pitanje->naslov = $request->input('naslov');
        $pitanje->sadrzaj = $request->input('sadrzaj');
        $pitanje->save();
        return redirect('pitanja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pitanje = Pitanje::find($id);
        $pitanje->delete();
        return redirect('/pitanja');
    }
}
