@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>  <i class="fas fa-user-edit"></i> Modifier  client </legend>
    <form action="{{ route('clients.update', ['client' => $client->id]) }}" method="post">
      
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="cin">Cin</label>
            <input type="text" name="Cin" value="{{ $client->Cin }}"  id="Cin" class="form-control" placeholder="Tapez un Cin">
            
            @error('Cin')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom"  value="{{ $client->nom }}"  id="nom"  class="form-control" placeholder="Tapez un Nom">
            @error('nom')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" value="{{$client->prenom }}" id="prenom" class="form-control" placeholder="Tapez un Prenom">
            @error('prenom')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Gmail">Email</label>
            <input type="text" name="Gmail" value="{{ $client->Gmail }}" id="Gmail" class="form-control" placeholder="Personne@Exemple.com">
            @error('Gmail')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse"  value="{{ $client->adresse }}"  id="adresse" class="form-control" placeholder="Tapez une Adresse">
            @error('adresse')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Tel">Tel</label>
            <input type="tel" name="Tel" value="{{ $client->Tel }}" id="Tel" class="form-control" placeholder="(+216)">
            @error('Tel')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <br>  <br>
     
        <div class="form-group row">
            <div class="col-sm-5 offset-sm-1">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                  j'accepte les termes et les conditions
                </label>
              </div>
            </div>
          </div>
          <br><br>
        <div class="row">
            <div class="col" ><button type="submit" class="btn btn-block btn-outline-primary"> <i class="fas fa-share-square"></i>Enregistrer</button></div>
            <div class="col" ><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-trash-alt"></i>Supprimer</button></div>
        </div>
       
    </form>
  
    
</fieldset>

@endsection