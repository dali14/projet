@extends('layouts.master')
@section('content')
<div class="row mb-2">

  <?php
  $stoke ='Non sidpo';
  if ($produit->stock > 0){$stoke = 'disponible';}
  
  ?>

  <div class="col-md-6">
  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{$produit->nomproduit}}</strong>
          <h3 class="mb-0"></h3>
          <div class="mb-1 text-muted">{{getPrice($produit->prixdevente)}}</div>
          <p>  <button id="size_S" aria-checked="false" role="radio" class="btn btn-sm btn-outline-secondary">S</button>
            <button id="size_M" aria-checked="false" role="radio" class="btn btn-sm btn-outline-secondary">M</button>
            <button id="size_L" aria-checked="false" role="radio" class="btn btn-sm btn-outline-secondary">L</button>
            <button id="size_XL" aria-checked="false" role="radio" class="btn btn-sm btn-outline-secondary">XL</button></p>
          <div class="mb-1 text-muted">{{$produit->description}}</div>
          <div class="mb-1 text-muted"><?php echo $stoke;?></div>
          <form action="{{ route('cart.store') }}" methode="GET">
          @csrf
          
          <input type="hidden" name="id" value="{{$produit->id}}">
          <p><button type="submit" aria-disabled="false" data-test-id="add-to-bag-button" class="btn btn-sm btn-outline-secondary" data-heap-action="add to cart" data-heap-label="add to bag" >Ajoute Au panier</button></p>
          </form>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/200x250/?{{$produit->nomproduit}}" class="bd-placeholder-img" width="200" height="250"/>
        </div>
      </div>
    </div>
    @endsection

    

  </div>