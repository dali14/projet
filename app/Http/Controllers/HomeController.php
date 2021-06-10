<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Produit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth')->except(welcome);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('home');
    }
    public function welcome()
    {
        $produits = Produit::all() ;
       
        return view('welcome',[
            'produits' => $produits
        ]);
    }

    public function product($product_id)
    {
        $produit = Produit::findOrFail($product_id);
        return view('product', ['produit' => $produit]);
    }
}
