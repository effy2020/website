<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Flotte;
use Illuminate\Http\Request;

class FlotteController extends Controller
{
    // Afficher la liste des véhicules
    public function index()
    {
        // Récupérer tous les véhicules de la flotte
        $flotte = Flotte::all();
        return view('flotte.index', compact('flotte'));
    }

    // Afficher le formulaire pour ajouter un véhicule
    public function create()
    {
        return view('flotte.create');
    }

    // Ajouter un nouveau véhicule
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'vehicle_model' => 'required|string|max:255',
            'vehicle_type' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255',
            'vehicle_status' => 'required|string|max:255',
        ]);

        // Créer un nouveau véhicule
        Flotte::create([
            'vehicle_model' => $request->vehicle_model,
            'vehicle_type' => $request->vehicle_type,
            'license_plate' => $request->license_plate,
            'vehicle_status' => $request->vehicle_status,
        ]);

        return redirect()->route('flotte.index')->with('success', 'Véhicule ajouté avec succès.');
    }

    // Afficher le formulaire pour modifier un véhicule
    public function edit($id)
    {
        $flotte = Flotte::findOrFail($id);
        return view('flotte.edit', compact('flotte'));
    }

    // Mettre à jour un véhicule
    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'vehicle_model' => 'required|string|max:255',
            'vehicle_type' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255',
            'vehicle_status' => 'required|string|max:255',
        ]);

        // Trouver le véhicule et le mettre à jour
        $flotte = Flotte::findOrFail($id);
        $flotte->update([
            'vehicle_model' => $request->vehicle_model,
            'vehicle_type' => $request->vehicle_type,
            'license_plate' => $request->license_plate,
            'vehicle_status' => $request->vehicle_status,
        ]);

        return redirect()->route('flotte.index')->with('success', 'Véhicule mis à jour avec succès.');
    }

    // Supprimer un véhicule
    public function destroy($id)
    {
        $flotte = Flotte::findOrFail($id);
        $flotte->delete();

        return redirect()->route('flotte.index')->with('success', 'Véhicule supprimé avec succès.');
    }
}
