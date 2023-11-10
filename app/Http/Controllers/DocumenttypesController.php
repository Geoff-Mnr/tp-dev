<?php

namespace App\Http\Controllers;

use App\Models\Documenttypes;
use Illuminate\Http\Request;

class DocumenttypesController extends Controller {

    public function index() {
        $documenttypes = Documenttypes::all();
        $title = 'Liste des types de documents';
        return view('documenttypes.index', compact('title', 'documenttypes'));
    }

    public function create() {
        $title = 'Créer un type de document';
        $documenttypes = Documenttypes::all();
        return view('documenttypes.create', compact('title', 'documenttypes'));
    }

    public function store(Request $request) {
        $request->validate([
            'reference' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);
        $documentData = $request->all();
        $documentData['is_active'] = true;

        $documenttype = Documenttypes::create($documentData);
        return redirect()->route('documenttypes.index')->with('success', 'Le type de document a été créé avec succès.');
    }

    public function show(Documenttypes $documenttype) {
        $title = 'Détails du type de document';
        return view('documenttypes.show', compact('title', 'documenttype'));
    }

    public function edit(Documenttypes $documenttype) {
        $title = 'Modifier le type de document';
        return view('documenttypes.edit', compact('title', 'documenttype'));
    }

    public function update(Request $request, Documenttypes $documenttype) {
        $documenttype->update($request->all());
        return redirect()->route('documenttypes.index')->with('success', 'Le type de document a été mis à jour avec succès.');
    }

}
