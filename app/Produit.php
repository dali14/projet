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
   
    public function getPrice()
    {
        $price = $this->price;

        return number_format($price, 2, ',', ' ') . ' €';
    }

}
