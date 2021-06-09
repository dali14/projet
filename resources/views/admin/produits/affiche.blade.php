@extends('layouts.admin')
@section('main')
@if (session('storeProduit'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeProduit') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateProduit'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateProduit') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h2><i class="fas fa-user-tag"></i> Détails sur le  Produit :<strong>{{ $produit->nomproduit.' '.$produit->description}}</strong></h2>
    <div class="card">
        <h5 class="card-header"><strong>{{ $produit->nomproduit.' '.$produit->description }}</strong></h5>
        <div class="card-body">
          <h5 class="card-title">Détails</h5>
          <p class="card-text">Nom de Produit: <strong>{{ $produit->nomproduit}}</strong></p>
          <p class="card-text">Prix: <strong>{{ $produit->prixdevente}}</strong></p>
          <p class="card-text">Stock: <strong>{{ $produit->stock}}</strong></p>
          <p class="card-text">Taille: <strong>{{ $produit->taille}}</strong></p>
          <p class="card-text">Categorie: <strong>{{ $produit->categorie}}</strong></p>
          <p class="card-text">Description: <strong>{{ $produit->description}}</strong></p>
          <p class="card-text">Photo: <strong>{{ $produit->photo}}</strong></p>

          <hr>
          <a href="{{ route('produits.edit', ['produit' => $produit->id]) }}" class="btn btn-outline-primary" title="Modifier produit {{ $produit->nomproduit.' '.$produit->description  }}">
              <i class="fas fa-produit-edit"></i>
          </a>
         <a href="{{ route('produits.destroy', ['produit' => $produit->id]) }}" class="btn btn-outline-primary" title="Supprimer produit{{   $produit->nomproduit.' '.$produit->description }}"  
            onclick="event.preventDefault(); document.querySelector('#delete-produits-form').submit()" >
            
             <i class="fas fa-produit-slash"></i> </a>
            <form action="{{ route('produits.destroy',['produit' =>$produit ->id ])}}" method="post" id="delete-produits-form">
             
         

         
          @csrf
          @method('DELETE')
            </form>
           
     
        </div>
      </div>
@endsection
