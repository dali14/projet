<?php

namespace App\Http\Controllers\Admin;

use App\Detailcommande;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class detailcommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.detailcommandes.index', ['detailcommandes' => Detailcommande::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detailcommande  $detailcommande
     * @return \Illuminate\Http\Response
     */
    public function show(Detailcommande $detailcommande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detailcommande  $detailcommande
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailcommande $detailcommande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detailcommande  $detailcommande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailcommande $detailcommande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detailcommande  $detailcommande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailcommande $detailcommande)
    {
        //
    }
}
