@extends('layouts.admin')
@section('main')

      @if (session('deleteProduit'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteProduit') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <h2><i class="fas fa-tshirt"></i> Liste des Produits</h2><br> <br>
    
    <table class="table table-striped">
        <thead>
      
            <th scope="col"> Num de produit</th>

            <th scope="col"> Nom de produit</th>

            <th scope="col"> Prix de produit</th>

            <th scope="col"> Description</th>

            <th scope="col"> Categorie</th>

            <th scope="col"> Taille</th>

            <th scope="col"> Stock</th>

            <th scope="col"> Photo</th>




          </tr>
        </thead>
        <tbody>
            @foreach ($produits as $key => $produit)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $produit->nomproduit }}</td>
              <td>{{ $produit->prixdevente }}</td>
              <td>{{ $produit->stock}}</td>
              <td>{{ $produit->taille }}</td>
              <td>{{ $produit->categorie }}</td>
              <td>{{ $produit->description }}</td>
              <td>{{ $produit->photo }}</td>
       


              <td> 
                 <a href="{{ route('produits.show',['produit' =>$produit ->id ])}}" class="btn btn-outline-primary" title="Afficher détails produits  {{ $produit->nomproduit.' '.$produit->description }}"> <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('produits.edit', ['produit' => $produit->id])}}" class="btn btn-outline-primary " title=" Modifier produit {{ $produit->nomproduit.' '.$produit->description }}">
                    <i class="fas fa-produit-edit"></i>

                    <a href="#" class="btn btn-outline-primary" title="Supprimer produit {{ $produit->nomproduit.' '.$produit->description}}"
                      onclick="event.preventDefault(); document.querySelector('#delete-produits-form').submit()"
                      ><i class="fas fa-produit-slash"></i></a>
              
                  <form action="{{ route('produits.destroy',['produit' =>$produit ->id ])}}" method="post" id="delete-produits-form">
                    @csrf
                    @method('DELETE')
                  </form>
              </td>
            </tr>
            @endforeach

      
         
        </tbody>

      </table>
    

      
@endsection
