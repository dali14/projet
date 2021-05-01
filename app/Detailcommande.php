<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Detailcommande extends Model
{
    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }
    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
}
