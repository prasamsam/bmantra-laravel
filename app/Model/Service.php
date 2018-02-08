<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table ='services';
    public $fillable =['serviceimage','servicename','servicedetail','serviceprice'];
}
