@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-produit-plus"></i> Ajouter un produit </legend>
    <form action="{{ route('produit.store')}}" method="post">
      
       
      @include('admin.produits.form')
    </form>
  
    
</fieldset>

@endsection