<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;
   // protected $guard = 'employee';


    protected $fillable = [
        'nom', 'email', 'password',
    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }



}
