<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Mail\Newclient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.clients.index', ['clients' => Client::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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
        
         
        $client = Client::create($validatedData);
         Mail::to($client->Gmail)->send(new Newclient($client));
        return redirect()->route('clients.show', $client)->with('storeClient', "Client Ajouter Avec Succés!");

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.clients.affiche',['client'=> $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit',['client'=> $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validatedData=$request->validate($this->validationRules());
        
      
            $client ->update($validatedData);
            return redirect()->route('clients.show', $client)->with('updateClient', "Client Modifier Avec Succés!");
           
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('deleteClient', 'Client Supprimer Avec Succés!');
          

    }
    private function validationRules(){
        return [
            'Cin'=>'required|min:8',
            'nom'=>' required|min:3',
            'prenom'=>'required|min:3',
            'Gmail'=>'required|email',
            'adresse'=>'required',
            'Tel'=>'required|min:8',
        ];
    }
}
