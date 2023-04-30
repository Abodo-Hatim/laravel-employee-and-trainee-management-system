<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::paginate(7);
        return view('layouts.employes.index' , ['employes' => $employes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.employes.create');
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
            'matricule'=>'required |unique:employes',
            'departement'=>'required',
            'date_recrutement'=>'required',
            'tele'=>'required |unique:employes',
            'adresse'=>'required',
            'ville'=>'required',
        ]);
        $employe=new Employe();
        $employe->nom=$request->nom;
        $employe->prenom=$request->prenom;
        $employe->matricule=$request->matricule;
        $employe->departement=$request->departement;
        $employe->date_recrutement=$request->date_recrutement;
        $employe->tele=$request->tele;
        $employe->adresse=$request->adresse;
        $employe->ville=$request->ville;
        $employe->save();
        return redirect('employes')->with('success', 'Employee Create Successfully!');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        return view('layouts.employes.show' , compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
        return view('layouts.employes.edit' , compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'matricule'=>'required',
            'departement'=>'required',
            'date_recrutement'=>'required',
            'tele'=>'required',
            'adresse'=>'required',
            'ville'=>'required',
        ]);

        $employe->nom=$request->nom;
        $employe->prenom=$request->prenom;
        $employe->matricule=$request->matricule;
        $employe->departement=$request->departement;
        $employe->date_recrutement=$request->date_recrutement;
        $employe->tele=$request->tele;
        $employe->adresse=$request->adresse;
        $employe->ville=$request->ville;
        $employe->save();
        return redirect('employes')->with('success', 'Employee Updated Successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        //
        $employe->delete();
        return redirect('employes')->with('success', 'Employee Deleted Successfully!');;
    }




    public function deleteAll(Employe $employe)
    {
        //
        $employe= Employe::all();
        $employe->deleteAll();
        return redirect('employes')->with('success', 'All Employee Deleted Successfully!');;
    }





    public function search(Request $request)
    {
        $query = $request->input('query');
        $employe = Employe::where('nom', 'LIKE', '%' . $query . '%')->get();
        return view('layouts.employes.search',['employes' => $employe]);
    }




}
