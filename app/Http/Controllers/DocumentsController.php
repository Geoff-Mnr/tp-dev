<?php

namespace App\Http\Controllers;
use App\Models\Documents;
use App\Models\Customer;
use App\Models\Documenttypes;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index()
    {
        $documents = Documents::with('customer', 'documenttype')->get();
        $title = 'Liste des documents';
        return view ('documents.index', compact('title','documents'));
    }

    public function create()
    {
        
        $title = 'Créer un document';

        $customers = Customer::all(); 
        $documenttypes = Documenttypes::all();
        return view ('documents.create', compact('title','customers','documenttypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'documenttype_id' => 'required',
            'reference' => 'required',
            'totalhvat' => 'required|numeric',
            'vat' => 'required|numeric',
            'totalttc' => 'required|numeric',
            
        ]);
    
        $input = $request->all();
        $input['is_active'] = true;
    
        $Documents = Documents::create($input);
    
        return redirect()->route('documents.index')->with('success', 'Le document a été créé avec succès.');
    }
    

    public function show(Documents $document)
    {
        $title='Détails du document';
        return view('documents.show', compact('title','document'));
    }

    public function edit(Documents $document)
    {
        $title='Modifier le document';
        return view('documents.edit', compact('title','document'));
    }

    public function update(Request $request, Documents $document)
    {

        $input = $request->all();
        $input['is_active'] = true;
        $document->update($input);
        return redirect()->route('documents.index');
    }

    public function destroy(Documents $document)
    {
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'le produit a bien été supprimé');
    }

}
