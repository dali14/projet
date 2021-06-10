@extends('layouts.admin')
@section('main')
@if (session('storeCommande'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeCommande') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateCommande'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateCommande') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h2>  <i class="fas fa-list"></i></i> Détails sur la  Commande :<strong>{{ $commande->id' '.$commande->datecommande }}</strong></h2>
    <div class="card">
        <h5 class="card-header"><strong>{{ $commande->nom.' '.$commande->prenom }}</strong></h5>
        <div class="card-body">
          <h5 class="card-title">Détails</h5>
          <p class="card-text">CommandeNum: <strong>{{ $commande->numcommande}}</strong></p>
          <p class="card-text">Email: <strong>{{ $commande->datecommande}}</strong></p>
          <p class="card-text">Adresse: <strong>{{ $commande->etatcommande}}</strong></p>
        
          <hr>
          <a href="{{ route('commandes.edit', ['commande' => $commande->id]) }}" class="btn btn-outline-primary" title="Modifier Etat commande {{ $commande->id.' '.$commande->datecommande  }}">
              <i class="fas fa-user-edit"></i>
          </a>
         <a href="{{ route('commandes.destroy', ['commande' => $commande->id]) }}" class="btn btn-outline-primary" title="Supprimer Commande{{ $commande->id' '.$commande->datecommande }}"  
            onclick="event.preventDefault(); document.querySelector('#delete-commandes-form').submit()" >
            
             <i class="fas fa-user-slash"></i> </a>
            <form action="{{ route('commandes.destroy',['commande' =>$commande->id ])}}" method="post" id="delete-commandes-form">
             
         
          @csrf
          @method('DELETE')
            </form>
           
     
        </div>
      </div>
@endsection
