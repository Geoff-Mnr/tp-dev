<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Documents;
use App\Models\Documenttypes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //Fonction qui permet de lister les produits
    public function index()
    {
        $products = Products::all();
        $title = 'Liste des produits';
        return view ('products.index', compact('title','products'));
    }

    //Fonction qui permet de créer un produit
    public function create()
    {
        $title = 'Créer un produit';
        return view ('products.create', compact('title'));
    }

    //Fonction qui permet de stocker un produit
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
        return redirect()->route('products.index')->with('success', 'Le document a été créé avec succès.');;

    }       

    //Fonction qui permet d'afficher un produit
    public function show(Products $product)
    {
        $title = 'Détails du produit';
        return view('products.show', compact('title', 'product'));
    }
    
    //Fonction qui permet de modifier un produit
    public function edit(Products $product)
    {
        $title='Modifier le produit';
        return view('products.edit', compact('title','product'));
    }

    //Fonction qui permet de mettre à jour un produit
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
  
    //Fonction qui permet de supprimer un produit
    public function destroy(Products $product)
    {
        $product ->delete();
        return redirect()->route('products.index')->with('success', 'le produit a bien été supprimé');
    }
    
}



