<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'servicepackages';
    public $fillable = ['packagename','packageservice1','packageservice2','packageservice3','packageservice4','packageservice5','packageprice'];
}
