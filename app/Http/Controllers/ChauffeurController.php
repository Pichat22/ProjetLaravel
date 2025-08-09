<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Typepermis;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultatdatabase=Chauffeur::all();
        return view('chauffeurs.liste',compact('resultatdatabase'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types=Typepermis::all();
       
        return view('chauffeurs.form',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->input('nom');
        $chauffeur->prenom = $request->input('prenom');
        $chauffeur->adresse = $request->input('adresse');
        $chauffeur->type_permis = $request->input('type_permis');
        $chauffeur->telephone = $request->input('telephone');
        $chauffeur->save();
        return redirect()->route('chauffeurs.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chauffeur $chauffeur)
    {
        //
    }
}
