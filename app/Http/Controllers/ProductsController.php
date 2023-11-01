<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Documents;
use App\Models\Documenttypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $title = 'Liste des produits';
        return view ('products.index', compact('title','products'));
    }

    public function create()
    {
        
        $title = 'Créer un produit';
        $documents = Documents::all();
        $documenttypes = Documenttypes::all();
        return view ('products.create', compact('title','documents','documenttypes'));
    }

    public function store (Request $request){
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'brand' => 'required|min:3|max:255',
            'ean_code' => 'required|min:3|max:255',
            'stock'=> 'required|min:1|max:255',
            'stock_min'=> 'required|min:1|max:255',
            'comment'=> 'required|min:3|max:255',
            'status' => 'nullable|max:1',
            'is_active' => 'nullable|boolean',
        ]);

       
        $input = $request->all();
        $input['is_active'] = true;
        $products = Products::create($input);
        $products->documents()->attach($request->input('document_id'));
        return redirect()->route('products.index')->with('success', 'Le document a été créé avec succès.');;

    }       

    public function show(Products $product)
    {
        $title = 'Détails du produit';
        $product->load('documents.documentType'); // Charger les documents avec leurs types

        return view('products.show', compact('title', 'product'));
    }
    
    public function edit(Products $product)
    {
        $title='Modifier le produit';
        return view('products.edit', compact('title','product'));
    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'brand' => 'required|min:3|max:255',
            'ean_code' => 'required|min:3|max:255',
            'stock'=> 'required|min:1|max:255',
            'stock_min'=> 'required|min:1|max:255',
            'comment'=> 'required|min:3|max:255',
            'status' => 'nullable|max:1',
            'is_active' => 'nullable|boolean',
        ]);

       
        $product->update($request->all());

        if($product->wasChanged()){
            return redirect()->route('products.show', $product)->with('Félicitation', 'Le produit a été modifié');
        }else{
            return redirect()->route('products.show', $product)->with('Attention', 'Aucune modification a été faite');
        }
    }
  
    public function destroy(Products $product)
    {
        $product ->delete();
        return redirect()->route('products.index')->with('success', 'le produit a bien été supprimé');
    }
    
}



