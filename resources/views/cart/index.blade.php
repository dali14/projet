@extends('layouts.master')



@section('content')
    @if (Cart::count() > 0)
        <div class="px-4 px-lg-0">


  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              @foreach (Cart::content() as $produit)
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="https://source.unsplash.com/200x250/?{{ $produit->model->nomproduit }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ $produit->model->nomproduit }}</a></h5>
                        <span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{ getPrice($produit->model->prixdevente)}}</strong></td>
                  <td class="border-0 align-middle"><strong>1</strong></td>
                  <td class="border-0 align-middle">
                  <form action="{{ route('cart.destroy', $produit->rowId) }}" methode="GET">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-dark"><i class="fa fa-trash"></i></a>
                  
                  </form>
                  
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
          <div class="p-4">
            <p class="font-italic mb-4">Si vous avez un code promo, veuillez le saisir dans la case ci-dessous</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">Si vous avez des informations pour le vendeur, vous pouvez les laisser dans la case ci-dessous</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">D??tail de la commande</div>
          <div class="p-4">
            <p class="font-italic mb-4">Les frais d'exp??dition et les frais suppl??mentaires sont calcul??s en fonction des valeurs que vous avez saisies.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total</strong><strong>{{ getPrice(Cart::subtotal()) }} </strong></li>
              
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>{{ getPrice(Cart::tax())}}</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong><h5 class="font-weight-bold">{{ getPrice(Cart::total())}}</h5>
              </li>
            </ul><a href="{{ route('paiment.index') }}" class="btn btn-dark rounded-pill py-2 btn-block">Passer ?? la caisse</a>
          </div>
        </div>
      </div>





    @else
                <div class="col-md-12">Voter panier est Vide</div>
    @endif

@endsection