@extends('layouts.admin')

@section('main')


<h3>  Details commande #{{ $detailcommande[0]->Commande_id}}  </h3>

@foreach($detailcommande as $key => $detail) 
<div class="card" style="width: 18rem;">

    
  <div class="card-body">
    <h5 class="card-title">{{ $detail->Commande_id}}</h5>
    <a href="#" class="card-link">Produit</a>
    <h6 class="card-subtitle mb-2 text-muted"> Quantitecommande : {{ $detail->quantitecommande}}</h6>
    <p class="card-text">Prixunitaire {{ $detail->	prixunitaire}} </p>
    <p class="card-text">Prixtotale {{ $detail->prixtotale}}</p>
    <p class="card-text">adressecommande : {{ $detail->adressecommande}}</p>
    
  </div>
  
  
</div>
@endforeach



@endsection