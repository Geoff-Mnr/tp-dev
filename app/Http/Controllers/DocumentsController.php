<?php

namespace App\Http\Controllers;
use App\Models\Documents;
use App\Models\Customer;
use App\Models\Products;
use App\Models\Documenttypes;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{

    //Fonction qui permet de lister les documents
    public function index()
    {
        $documents = Documents::with('customer', 'documenttype', 'products')->get();
        $title = 'Liste des documents';
        return view('documents.index', compact('title', 'documents'));
    }

    //Fonction qui permet de créer un document
    public function create()
    {
        
        $title = 'Créer un document';
        $customers = Customer::all(); 
        $products = Products::all();
        $documenttypes = Documenttypes::all();
        return view ('documents.create', compact('title','customers','products','documenttypes'));
    }

    //Fonction qui permet de stocker un document
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'documenttype_id' => 'required',
            'reference' => 'required',
            'totalhvat' => 'required|numeric',
            'vat' => 'required|numeric',
            'totalttc' => 'required|numeric',
            'product_id' => 'required', 
        ]);
    
        $documentData = $request->all();
        $documentData['is_active'] = true;
        $document = Documents::create($documentData);
        $document->products()->attach($request->input('product_id'));
        return redirect()->route('documents.index')->with('success', 'Le document a été créé avec succès.');
    }
    
    //Fonction qui permet d'afficher un document
    public function show(Documents $document)
    {
        $title='Facture :';
        return view('documents.show', compact('title','document'));
    }

    //Fonction qui permet de modifier un document
    public function edit(Documents $document)
    {
        $title = 'Modifier le document';
        $customers = Customer::all();
        $products = Products::all(); 
        $documenttypes = Documenttypes::all();
        return view('documents.edit', compact('title', 'customers', 'products', 'documenttypes', 'document'));
    }

    //Fonction qui permet de mettre à jour un document
    public function update(Request $request, Documents $document)
    {
        $document->update($request->all());
        $productID = $request->input('product_id');
        $document->products()->sync($productID);
    
        if($document->wasChanged()){
            return redirect()->route('documents.index', $document)->with('Félicitation', 'Le produit a été modifié');
        }else{
            return redirect()->route('documents.index', $document)->with('Attention', 'Aucune modification a été faite');
        }
        
    }
    
    //Fonction qui permet de supprimer un document
    public function destroy(Documents $document)
    {
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'le produit a bien été supprimé');
    }

}
