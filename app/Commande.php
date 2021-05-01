<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function detailcommandes()
    {
        return $this->hasMany('App\Detailcommande');
    }
    public function paiements()
    {
        return $this->hasMany('App\Paiement');
    }
}
