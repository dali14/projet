<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    public function detailcommandes()
    {
        return $this->hasMany('App\Detailcommande');
    }
    public function detailproduits()
    {
        return $this->hasMany('App\Detailproduit');
    }


}
