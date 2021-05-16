@extends('layouts.admin')
@section('main')
@if (session('storeClient'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeClient') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateClient'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateClient') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h2><i class="fas fa-user-tag"></i> Détails sur le  Client :<strong>{{ $client->nom.' '.$client->prenom }}</strong></h2>
    <div class="card">
        <h5 class="card-header"><strong>{{ $client->nom.' '.$client->prenom }}</strong></h5>
        <div class="card-body">
          <h5 class="card-title">Détails</h5>
          <p class="card-text">Cin: <strong>{{ $client->Cin}}</strong></p>
          <p class="card-text">Email: <strong>{{ $client->Gmail}}</strong></p>
          <p class="card-text">Adresse: <strong>{{ $client->adresse}}</strong></p>
          <p class="card-text">Tel: <strong>{{ $client->Tel}}</strong></p>
        
          <hr>
          <a href="{{ route('clients.edit', ['client' => $client->id]) }}" class="btn btn-outline-primary" title="Modifier client {{ $client->nom.' '.$client->prenom  }}">
              <i class="fas fa-user-edit"></i>
          </a>
         <a href="{{ route('clients.destroy', ['client' => $client->id]) }}" class="btn btn-outline-primary" title="Supprimer Client{{   $client->nom.' '.$client->prenom }}"  
            onclick="event.preventDefault(); document.querySelector('#delete-clients-form').submit()" >
            
             <i class="fas fa-user-slash"></i> </a>
            <form action="{{ route('clients.destroy',['client' =>$client ->id ])}}" method="post" id="delete-clients-form">
             
         
          @csrf
          @method('DELETE')
            </form>
           
     
        </div>
      </div>
@endsection
