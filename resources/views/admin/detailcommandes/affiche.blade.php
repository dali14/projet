@extends('layouts.admin')

@section('main')

    <h3>  Details commande #{{ $detailcommande->Commande_id}}  </h3>
     
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">{{ $detailcommande->Commande_id}}</h5>
    <a href="#" class="card-link">Produit</a>
    <h6 class="card-subtitle mb-2 text-muted"> Quantitecommande : {{ $detailcommande->quantitecommande}}</h6>
    <p class="card-text">Prixunitaire {{ $detailcommande->	prixunitaire}} </p>
    <p class="card-text">Prixtotale {{ $detailcommande->prixtotale}}</p>
    <p class="card-text">adressecommande : {{ $detailcommande->adressecommande}}</p>
    <a href="#" class="card-link">Another link</a>
  </div>
  
</div>



@endsection