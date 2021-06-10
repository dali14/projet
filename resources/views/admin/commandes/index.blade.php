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

    <h2>  <i class="fas fa-list"></i> Liste des Commandes</h2><br> <br>
    
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col"> Numéro de commande</th>
            <th scope="col"> Etat de commande</th>
            <th scope="col"> Date de commande</th>
            <th scope="col"> Client ID</th>
            <th scope="col"> Opération</th>

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
                  <a href="{{ url('detailcommande' , [$commande->id]) }}" class="btn btn-outline-primary" title="Afficher les détails  {{ $commande->nom.' '.$commande->prenom }}"> <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('commandes.edit', ['commande' => $commande->id])}}" class="btn btn-outline-primary " title=" Modifier etat commande {{ $commande->id}}">
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
