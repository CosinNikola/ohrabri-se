<?php

namespace App\Http\Controllers;
use App\Models\Iskustva;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class IskustvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iskustva = Iskustva::orderBy('id','desc')->paginate(3);
        return view('iskustva/iskustva')->with('iskustva', $iskustva);
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
            'naslov' => 'required|string',
            'sadrzaj' => 'required'
        ]);
        $iskustvo = new Iskustva;
        $iskustvo->id_autora = auth()->user()->id;
        $iskustvo->ime_autora = auth()->user()->name;
        $iskustvo->naslov = $request->input('naslov');
        $iskustvo->sadrzaj = $request->input('sadrzaj');
        $iskustvo->save();
        return redirect('/iskustva');

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
        $iskustvo = Iskustva::find($id);
        return view('iskustva/editIskustvo')->with('iskustvo', $iskustvo);
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
        $request->validate([
            'naslov' => 'required|string',
            'sadrzaj' => 'required'
        ]);
        $iskustvo = Iskustva::find($id);
        $iskustvo->naslov = $request->input('naslov');
        $iskustvo->sadrzaj = $request->input('sadrzaj');
        $iskustvo->save();
        return redirect('/iskustva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iskustvo = Iskustva::find($id);
        $iskustvo->delete();
        return redirect('/iskustva');
    }
}
