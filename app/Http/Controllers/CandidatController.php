<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    //

    public function index(){
        return Candidat::all();
    }

    public function show(Candidat $candidat)
    {
        return $candidat;
    }

    public function store(Request $request)
    {
        $candidat = Candidat::create([
            'nom' => $request->input('nom'),
            'postnom' => $request->input('postnom'),
            'prenom' => $request->input('prenom'),
            'dateDeNaissance' => $request->input('dateDeNaissance'),
            'sexe' => $request->input('sexe'),
            'adresse' => $request->input('adresse'),
            'journal' => $request->input('journal'),
            'bulletin5' => $request->input('bulletin5'),
            'bulletin6' => $request->input('bulletin6'),
            'carteDeleve' => $request->input('carteDeleve')
        ]);

        return $candidat;
    }

    public function putResultat(Request $request, $id)
    {
        $request->validate([
            'resultatTest' => 'required|string|max:255',
        ]);
     
        $candidat = Candidat::findOrFail($id);
        $candidat->resultatTest = $request->input('resultatTest');
        $candidat->save();
    
        return response()->json([
            'message' => 'Résultat ajouté avec succès',
            'candidat' => $candidat
        ]);
    }

    public function getResultat(Candidat $candidat)
    {
        return response()->json([
            'resultatTest' => $candidat->resultatTest,
            'message' => 'Du candidat suivant :',
            'Nom du candidat' => $candidat->nom,
            'Postnom' => $candidat->postnom,
            'Prenom' => $candidat->prenom
        ]);
    }

}
