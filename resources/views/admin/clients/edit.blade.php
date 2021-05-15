@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-user-edit"></i> Modifier  client </legend>
    <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="post">
      
      
        @method('PUT')
        
       @include('admin.clients.form')
       
    </form>
  
    
</fieldset>

@endsection