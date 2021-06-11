<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
  
        {
            
            return view('admin.produits.index', ['produits' => Produit::all()]);
        }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
            return view('admin.produits.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request)
        $validatedData=$request->validate($this->validationRules()); 
         $produit = Produit::create($validatedData);
         return redirect()->route('produits.show', $produit)->with('storeProduit', "Produit Ajouter Avec Succés!");
       

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('admin.produits.affiche',['produit'=> $produit]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('admin.produits.edit',['produit'=> $produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        $validatedData=$request->validate($this->validationRules());
        $produit ->update($validatedData);
        return redirect()->route('produits.show', $produit)->with('updateProduit', "Produit est modifié Avec Succés!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('deleteProduit', 'Produit est supprimé Avec Succés!');
    }

    private function validationRules(){
        return [
            'nomproduit'=>'required',
            'prixdevente'=>'required',
            'stock'=>'required',
            'taille'=>'required',
            'categorie'=>'required',
            'description'=>'required',
            'image'=>'required',
        ];
    }
}
