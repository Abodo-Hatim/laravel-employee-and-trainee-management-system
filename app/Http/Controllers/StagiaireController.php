<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stagiaires=Stagiaire::paginate(7);
        return view('layouts.stagiaires.index' , compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'filiere'=>'required',
            'tele'=>'required | unique:stagiaires',
            'adresse'=>'required',
            'ville'=>'required',
        ]);
        $stagiaire=new Stagiaire();
        $stagiaire->nom=$request->nom;
        $stagiaire->prenom=$request->prenom;
        $stagiaire->filiere=$request->filiere;
        $stagiaire->tele=$request->tele;
        $stagiaire->adresse=$request->adresse;
        $stagiaire->ville=$request->ville;
        $stagiaire->save();
        return redirect('stagiaires');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
        return view('layouts.stagiaires.show' , compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
        return view('layouts.stagiaires.edit' , compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
        $stagiaire->delete();
        return redirect('stagiaires');
    }




    public function deleteAll(Stagiaire $stagiaire)
    {
        //
        $stagiaire= Stagiaire::all();
        $stagiaire->deleteAll();
        return redirect('stagiaires');
    }





    public function search(Request $request)
    {
        $query = $request->input('query');
        $stagiaire = Stagiaire::where('nom', 'LIKE', '%' . $query . '%')->get();
        return view('layouts.stagiaires.search',['stagiaires' => $stagiaire]);
    }




}
