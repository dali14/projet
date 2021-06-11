<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
class paimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Cart::count() == 0 ){

            return redirect()->route('produit.index');  // redirect home page if bag is empty
        }


        Stripe::setApiKey('sk_test_51J0sd5E3tX7X8e4oMkoGMhld8FX0R3TP0FAvV3SAYDO3ata5BmOoojZjoMeg5FcgneeE9rugKt7Uyhpns1WcWavJ00ElfMnP0e');

        $intent = \Stripe\PaymentIntent::create([
            'amount' => round(Cart::total()*100),
            'currency' => 'eur',
            
          ]);
       
        $clientSecret = Arr::get('$intent', 'client_secret');
            
        return view('paiment.index', [
            'clientSecret' => $intent["client_secret"]

        ]);
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
        Cart::destroy();
        $data = $request->json()->all();
        return $data['paymentIntent'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
