@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-user-plus"></i> ajouter une Commande </legend>
    <form action="{{ route('commandes.store')}}" method="post">
      @include('admin.commandes.form')
    </form>
  
    
</fieldset>

@endsection