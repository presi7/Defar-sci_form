<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;
use App\Models\Module;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // liste des modules dans module
        $module = Module::all();


        return view('candidat.ajouter',compact('module'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $candidat = Candidat::all();
        $total = Candidat::count();
        $rh = Candidat::where('domaine', 'Ressources Humaines')->count();
        $md = Candidat::where('domaine', 'Marketing Digital')->count();
        $gp = Candidat::where('domaine', 'gestion-projet')->count();
        $ib = Candidat::where('domaine', 'Informatique Bureautique')->count();
        $dw = Candidat::where('domaine', 'Developpement web')->count();
        $ard = Candidat::where('domaine', 'Arduino(robotique - internet des objets connectés)')->count();
        $mi = Candidat::where('domaine', 'modelisation-impression3d')->count();
        $maint = Candidat::where('domaine', 'Maintenance')->count();
        $dg = Candidat::where('domaine', 'Design Graphique')->count();
        $other = Candidat::where('domaine', 'Autres')->count();
        return view('candidat.liste',compact('candidat','total','rh','md','gp','ib','dw','ard','mi','maint','dg','other'));


        // $candidats = Candidat::all();
        // return view('dashboard', ['candidats' => $candidats]);
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
        $candidat->myfile = $request->myfile;
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
        $candidat = Candidat::find($id);

        return view('candidat.montrer',compact('candidat'));
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
        $candidat = Candidat ::find($id);
        $candidat->delete();
        return back();
    }
}
