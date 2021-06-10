@csrf

        <div class="form-group">
            <label for="nomproduit">Nom de Produit</label>
            <input type="text" name="nomproduit" value="{{ $produit->nomproduit ?? old('nomproduit') }}"  id="nomproduit" class="form-control" placeholder="Tapez le nom de produit">
            
            @error('nomproduit')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prixdevente">Le Prix</label>
            <input type="text" name="prixdevente"  value="{{  $produit->prixdevente ?? old('prixdevente') }}"  id="prixdevente"  class="form-control" placeholder="Tapez le prix">
            @error('prixdevente')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" name="stock" value="{{  $produit->stock ?? old('stock') }}" id="stock" class="form-control" placeholder="Tapez la stock ">
            @error('stock')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="form-group">  
        <label for="taille">La Taille: </label>                   
          <select name="taille" id="taille">
      
            <option>choisir</option>
            <option value="S">Small</option>
            <option value="M">Moyenne</option>
            <option value="L">Large</option>
          </select>
        </div>

        <div class="form-group"> 
        <label for="categorie">La Categorie: </label>                    
          <select name="categorie" id="categorie">
            <option>choisir</option>
            <option value="Homme">Pour Homme</option>
            <option value="Femme">Pour Femme</option>
        
          </select>
        </div>
        <div class="form-group">
            <label for="description">La description du produit </label>
            <input type="text" name="description" value="{{  $produit->description ?? old('description') }}" id="description" class="form-control" placeholder="donner une description pour cet produit ">
            @error('description')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">L'image du produit </label>
            <input type="text" name="image" value="{{  $produit->image ?? old('image') }}" id="image" class="form-control" >
            @error('stock')<div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    
        <br>  <br>
     
     
          <br><br>
        <div class="row">
            <div class="col" ><button type="submit" class="btn btn-block btn-outline-primary"> <i class="fas fa-share-square"></i>Enregistrer</button></div>
            <div class="col" ><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-trash-alt"></i>Quitter</button></div>
        </div>
       