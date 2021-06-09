<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Detailcommande extends Model
{
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
}
