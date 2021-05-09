<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function Admin()
    {
       return $this->belongsTo('App\Admin');
    }
}
//clients
//client