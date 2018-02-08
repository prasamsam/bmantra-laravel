<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Client extends Authenticatable
{
    protected $guard='client';
    public $fillable=['Firstname','Middlename','Lastname','Email','password','image'];

    public function getFirstNameAttribute($value){
        return ucfirst($value);
    }

    public function setFirstNameAttribute($value){
        $this->attributes['Firstname'] = strtolower($value);
    }

    public function getMiddleNameAttribute($value){
        return ucfirst($value);
    }

    public function setMiddleNameAttribute($value){
        $this->attributes['Middlename'] = strtolower($value);
    }

    public function getLastNameAttribute($value){
        return ucfirst($value);
    }

    public function setLastNameAttribute($value){
        $this->attributes['Lastname'] = strtolower($value);
    }
}
