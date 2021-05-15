@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-user-plus"></i> ajouter un client </legend>
    <form action="{{ route('clients.store')}}" method="post">
      
       
      @include('admin.clients.form')
    </form>
  
    
</fieldset>

@endsection