<?php

namespace App\Http\Controllers\Admin;

use App\Commande;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class commandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.commandes.index', ['commandes' => Commande::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.commandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
       $validatedData=$request->validate($this->validationRules());
        
         
        $commande = Commande::create($validatedData);


        return redirect()->route('commandes.show', $commande)->with('storeCommande', "Commande Ajouter Avec Succés!");

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        return view('admin.commandes.affiche',['commande'=> $commande]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        return view('admin.commandes.edit',['commande'=> $commande]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {   
        
        $etat = request('etat');
        
        $commande->etatcommande = $etat;
        
        $commande->save();
        

        return view('admin.commandes.edit',['commande'=> $commande]);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        $commande->delete();
        return redirect()->route('commandes.index')->with('deleteCommande', 'Commande Supprimer Avec Succés!');
          

    }
    private function validationRules(){
        return [
            'numcommande'=>'required',
        ];
    }
}
