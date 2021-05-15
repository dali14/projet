<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $guarded = [];
 

    public function Admin()
    {
      return $this->hasMany('App\ Commande');
    }
}