@csrf

        <div class="form-group">
            <label for="nomproduit">Nom de Produit</label>
            <input type="text" name="nomproduit" value="{{ $produit->nomproduit ?? old('nomproduit') }}"  id="nomproduit" class="form-control" placeholder="Tapez un nom de produit">
            
            @error('nomproduit')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prixdevente">Prix</label>
            <input type="text" name="prixdevente"  value="{{  $produit->prixdevente ?? old('prixdevente') }}"  id="prixdevente"  class="form-control" placeholder="Tapez un prix">
            @error('prixdevente')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" value="{{  $client->prenom ?? old('prenom') }}" id="prenom" class="form-control" placeholder="Tapez un Prenom">
            @error('prenom')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Gmail">Email</label>
            <input type="text" name="Gmail" value="{{ $client->Gmail ?? old('Gmail') }}" id="Gmail" class="form-control" placeholder="Personne@Exemple.com">
            @error('Gmail')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse"  value="{{  $client->adresse??old('adresse') }}"  id="adresse" class="form-control" placeholder="Tapez une Adresse">
            @error('adresse')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Tel">Tel</label>
            <input type="tel" name="Tel" value="{{  $client->Tel ?? old('Tel') }}" id="Tel" class="form-control" placeholder="(+216)">
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
       