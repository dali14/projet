@extends('layouts.master')
@section('content')
@foreach($produits as $produit)
  <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{$produit->nomproduit}}</strong>
          <h3 class="mb-0"></h3>
          <br>
          <div class="mb-1 text-muted">{{getPrice($produit->prixdevente)}}</div>
          <div class="mb-1 text-muted">{{$produit->description}}</div>
          <div class="mb-1 text-muted">{{$produit->categorie}}</div>
          <br>
          <br>
          <a class="btn btn-sm btn-outline-secondary" href="/produit/{{$produit->id}}" class="stretched-link">Detail De Produit</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/200x250/?{{$produit->nomproduit}}" class="bd-placeholder-img" width="200" height="250"/>
        </div>
      </div>
    </div>
  @endforeach
  @endsection