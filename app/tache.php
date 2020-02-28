<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tache extends Model
{



    public function projet()
    {
        return $this->belongsTo('App\Projet');
    }
}
