@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-user-edit"></i> Modifier La Commande Num :{{ $commande->id}} état actuel ({{ $commande->etatcommande}}) </legend>
    <form action="{{ route('commandes.update', ['commande' => $commande->id])}}" method="post">
      
       

        @method('PUT')
        
       @include('admin.commandes.form')
       
    </form>
  
    
</fieldset>

@endsection