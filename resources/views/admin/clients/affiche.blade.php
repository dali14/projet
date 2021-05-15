@extends('layouts.admin')
@section('main')
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
         {{-- <a href="#" class="btn btn-danger" title="Delete user {{ $customer->firstname.' '.$customer->lastname  }}"----}}
            
        </div>
      </div>
@endsection
