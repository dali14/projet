<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded =[];
    public function detailcommandes()
    {
        return $this->hasMany('App\Detailcommande');
    }
   
    

}
