<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function detailcommandes()
    {
        return $this->hasMany(Detailcommande::class);
    }
    public function paiements()
    {
        return $this->hasMany('App\Paiement');
        
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    

}
