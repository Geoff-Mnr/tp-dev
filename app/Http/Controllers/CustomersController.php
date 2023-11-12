<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //Fonction qui permet de lister les clients
    public function index()
    {
        $customers = Customer::all();
        $title = 'Liste des clients';
        return view ('customers.index', compact('title','customers'));
    }

    //Fonction qui permet de créer un client
    public function create()
    {
        $title = 'Créer un client';
        return view ('customers.create', compact('title'));
    }


    //Fonction qui permet de stocker un client
    public function store(Request $request)
    {

        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'phone' => 'required|min:3|max:255',
            'website'=> 'required|min:3|max:255',
            'vat_number'=> 'required|min:3|max:255',
            'description'=> 'required|min:3|max:255',
            'comment'=> 'required|min:3|max:255',
            'status' => 'nullable|max:1',
            'is_active' => 'nullable|boolean',
        ]);

        $input = $request->all();
        $input['is_active'] = true;
        $customer = Customer::create($input);
        return redirect()->route('customers.index');
    }

    //Fonction qui permet d'afficher un client
    public function show(Customer $customer)
    {
        $title='Détails du client';
        return view('customers.show', compact('title','customer'));
    }

    //Fonction qui permet de modifier un client
    public function edit(Customer $customer)
    {
        $title='Modifier le client';
        return view('customers.edit', compact('title','customer'));
    }

    //Fonction qui permet de mettre à jour un client
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'reference' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'phone' => 'required|min:3|max:255',
            'website'=> 'required|min:3|max:255',
            'vat_number'=> 'required|min:3|max:255',
            'description'=> 'required|min:3|max:255',
            'comment'=> 'required|min:3|max:255',
            'status' => 'nullable|max:1',
            'is_active' => 'nullable|boolean', 
        ]);

        $customer->update($request->all());

        //Si le client a été modifié
        if($customer->wasChanged()){
            return redirect()->route('customers.show', $customer)->with('Félicitation', 'Le produit a été modifié');
        }else{
            return redirect()->route('customers.show', $customer)->with('Attention', 'Aucune modification a été faite');
        }
    }

    //Fonction qui permet de supprimer un client
    public function destroy(Customer $customer)
    {
        $customer ->delete();
        return redirect()->route('customers.index')->with('success', 'le produit a bien été supprimé');
    }
}
