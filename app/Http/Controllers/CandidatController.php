<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidat.ajouter');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $candidat = Candidat::all();

        return view('candidat.liste',compact('candidat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidat = new Candidat();
        $candidat->email = $request->email;
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->telephone = $request->telephone;
        $candidat->adresse = $request->adresse;
        $candidat->domaine = $request->domaine;
        $candidat->cv = $request->myfile;
        $candidat->question = $request->question;

        $candidat->save();

        return redirect()->back()->with('success','candidat enregistré');
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
        $candidat = Candidat::find($id);

        return view('candidat.editer',compact('candidat'));
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
