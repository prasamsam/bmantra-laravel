<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    public $fillable=['Username','Email','FirstName','LastName','Password','Address','City','Country','Postcode','status','utype'];

    public function getUsernameAttribute($value){
        return ucfirst($value);
    }

    public function setUsernameAttribute($value){
        $this->attributes['Username'] = strtolower($value);
    }

    public function getFirstNameAttribute($value){
        return ucfirst($value);
    }

    public function setFirstNameAttribute($value){
        $this->attributes['FirstName'] = strtolower($value);
    }

    public function getLastNameAttribute($value){
        return ucfirst($value);
    }

    public function setLastNameAttribute($value){
        $this->attributes['LastName'] = strtolower($value);
    }

    public function getAddressAttribute($value){
        return ucfirst($value);
    }

    public function setAddressAttribute($value){
        $this->attributes['Address'] = strtolower($value);
    }

    public function getCityAttribute($value){
        return ucfirst($value);
    }

    public function setCityAttribute($value){
        $this->attributes['City'] = strtolower($value);
    }

    public function getCountryAttribute($value){
        return ucfirst($value);
    }

    public function setCountryAttribute($value){
        $this->attributes['Country'] = strtolower($value);
    }
}

