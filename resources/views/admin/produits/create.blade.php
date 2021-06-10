@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-user-plus"></i> Ajouter un produit </legend>
    <form action="{{ route('produits.store')}}" method="post">
      
      @include('admin.produits.form')
    </form>
  
    
</fieldset>

@endsection