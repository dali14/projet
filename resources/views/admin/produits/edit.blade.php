@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-produit-edit"></i> Modifier  produit </legend>
    <form action="{{ route('produits.update', ['produit' => $produit->id]) }}" method="post">
      
      
        @method('PUT')
        
       @include('admin.produits.form')
       
    </form>
  
    
</fieldset>

@endsection