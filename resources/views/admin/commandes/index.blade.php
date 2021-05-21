@extends('layouts.admin')
@section('main')
@if (session('deleteCommande'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteCommande') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <h2><i class="fas fa-users"></i> Liste des Commandes</h2><br> <br>
    <a href="{{ route('commandes.create')}}" class="btn btn-outline-primary"   > <i class="fas fa-user-plus"></i> Nouveau  Commande</a> <br> <br> <br>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-id-card"></i> Numero de commande</th>
            <th scope="col"><i class="fas fa-user"></i> Etat de commande</th>
            <th scope="col"><i class="fas fa-user"></i> Date de commande</th>
            <th scope="col"><i class="fas fa-user"></i> Client ID</th>
            <th scope="col"><i class="fas fa-user"></i> Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $key => $commande)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $commande->numcommande }}</td>
              <td>{{ $commande->etatcommande }}</td>
              <td>{{ $commande->datecommande }}</td>
              <td>{{ $commande->Client_id }}</td>
              
              
               

        

              <td> 
                  <a href="{{ route('commandes.show',['commande' =>$commande ->id ])}}" class="btn btn-outline-primary" title="Afficher les détails  {{ $commande->nom.' '.$commande->prenom }}"> <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('commandes.edit', ['commande' => $commande->id])}}" class="btn btn-outline-primary " title=" Modifier commande {{ $commande->nom.' '.$commande->prenom }}">
                    <i class="fas fa-user-edit"></i>

                    <a href="#" class="btn btn-outline-primary" title="Supprimer Commande {{ $commande->numcommande.' '.$commande->datecommande }}"
                      onclick="event.preventDefault(); document.querySelector('#delete-commandes-form').submit()"
                      ><i class="fas fa-user-slash"></i></a>
              
                  <form action="{{ route('commandes.destroy',['commande' =>$commande ->id ])}}" method="post" id="delete-commandes-form">
                    @csrf
                    @method('DELETE')
                  </form>
              </td>
            </tr>
            @endforeach

      
         
        </tbody>

      </table>
@endsection
