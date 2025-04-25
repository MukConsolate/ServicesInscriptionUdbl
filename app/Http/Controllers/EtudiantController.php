<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function store(Request $request, $candidat_id)
    {
        $candidat = Candidat::findOrFail($candidat_id);

        $etudiant = Etudiant::create([
            'candidat_id' => $candidat_id,
            'matricule' => $request->input('matricule'),
            'mail' => $request->input('mail')
            
        ]);

        return response()->json([
            'message' => 'Etudiant crée avec succès',
            'etudiant' => $etudiant,
            'coordonnées de l\'étudiant' => $candidat
        ]);
    }
}
