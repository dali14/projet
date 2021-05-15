@extends('layouts.admin')
@section('main')

    <h2><i class="fas fa-users"></i> Liste des Clients</h2><br> <br>
    <a href="{{ route('clients.create')}}" class="btn btn-outline-primary"   > <i class="fas fa-user-plus"></i> Nouveau  Client</a> <br> <br> <br>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-id-card"></i> Cin</th>
            <th scope="col"><i class="fas fa-user"></i> Nom</th>
            <th scope="col"><i class="fas fa-at"></i> Adresse</th>
            <th scope="col"><i class="fas fa-phone-square-alt"></i> Tel</th>
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
              <td>{{ $client->admin_id}}</td>
              <td> 
                  <a href="{{ route('clients.show',['client' =>$client ->id ])}}" class="btn btn-outline-primary" title="Afficher les détails  {{ $client->nom.' '.$client->prenom }}"> <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('clients.edit', ['client' => $client->id])}}" class="btn btn-outline-primary " title=" Modifier client {{ $client->nom.' '.$client->prenom }}">
                    <i class="fas fa-user-edit"></i>
                  <a href="#"   class="btn btn-outline-primary" title="Supprimer le client  {{ $client->nom.' '.$client->prenom }}"> <i class="fas fa-trash-alt"></i></a>
              </td>
            @endforeach

      
         
        </tbody>

      </table>
@endsection
