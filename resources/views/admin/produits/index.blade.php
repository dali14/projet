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

    <h2><i class="fas fa-users"></i> Liste des Produits</h2><br> <br>

    <a href="{{ route('produits.create')}}" class="btn btn-outline-primary btn-lg.float-right"> Nouveau produit</a>  <br> <br> <br>
    
    <table class="table table-striped">
        <thead>
            <th scope="col">Id</th>
            <th scope="col"><i class="fas fa-user"></i> Nom de produit et sa description</th>

            <th scope="col"><i class="fas fa-user"></i> Prix de produit</th>

            <th scope="col"><i class="fas fa-user"></i> Taille</th>
            
            <th scope="col"><i class="fas fa-user"></i> Categorie</th>

          

            <th scope="col"><i class="fas fa-user"></i> Stock</th>

            <th scope="col"><i class="fas fa-user"></i> Image</th>




          </tr>
        </thead>
        <tbody>
            @foreach ($produits as $key => $produit)
            <tr>
              <th scope="row">{{ $key }}</th>
            
              <td>{{ $produit->nomproduit.' '.$produit->description  }}</td>
              <td>{{ $produit->prixdevente }}</td>
              <td>{{ $produit->stock}}</td>
              <td>{{ $produit->taille }}</td>
              <td>{{ $produit->categorie }}</td>
        
              <td>{{ $produit->image }}</td>
       


              <td> 
                 <a href="{{ route('produits.show',['produit' =>$produit ->id ])}}" class="btn btn-outline-primary" title="Afficher détails produits  {{ $produit->nomproduit.' '.$produit->description }}"> 
                  <i class="fas fa-user-tag"></i>
                </a>


                 <a href="{{ route('produits.edit', ['produit' => $produit->id]) }}" class="btn btn-outline-primary" title="Modifier produit {{ $produit->nomproduit.' '.$produit->description  }}">
                   <i class="fas fa-user-edit"></i>
                 </a>
          

                    <a href="#"class="btn btn-outline-primary" title="Supprimer produit {{ $produit->nomproduit.' '.$produit->description}}"
                      onclick="event.preventDefault(); document.querySelector('#delete-produits-form').submit()">
                      <i class="fas fa-user-slash"></i></a>

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
