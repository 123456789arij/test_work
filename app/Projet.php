<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{

    protected $fillable = [
        'Projet_Name',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function taches()
    {
        return $this->hasMany('App\Tache');
    }




}
