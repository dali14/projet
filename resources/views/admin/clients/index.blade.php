@extends('layouts.admin')
@section('main')
    <h2> Liste des Clients</h2>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-user"></i> Cin</th>
            <th scope="col"><i class="fas fa-phone"></i> Nom</th>
            <th scope="col"><i class="fas fa-at"></i> Adresse</th>
            <th scope="col"><i class="fas fa-at"></i> Tel</th>
            <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients as $key => $client)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $client->Cin }}</td>
              <td>{{ $client->nom.' '.$client->prenom  }}</td>
        
              <td>{{ $client->adresse}}</td>
              <td>{{ $client->Tel}}</td>
              <td>
                  <a href="#" class="btn btn-outline-info">Afficher</a>
                  <a href="#" class="btn btn-outline-secondary">Modifier</a>
                  <a href="#" class="btn btn-outline-danger">Supprimer</a>
              </td>
            @endforeach

      
        
        </tbody>

      </table>
@endsection
